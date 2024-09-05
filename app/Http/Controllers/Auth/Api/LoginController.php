<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\{
    Request,
    Response
};

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        try {
            $credentials = $request->validated();

            if (!auth()->attempt($credentials)) {
                return response()->json([
                    'status'  => false,
                    'message' => 'Invalid credentials!',
                ], Response::HTTP_UNAUTHORIZED);
            }

            $token = $request->user()->createToken('API TOKEN');

            return response()->json([
                'access_token' => $token->plainTextToken,
                'token_type'   => 'Bearer',
            ]);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage(), 500]);
        }
    }
}
