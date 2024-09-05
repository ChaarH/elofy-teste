<?php

namespace App\Http\Controllers\Auth\Api;

use App\Constants\RoleConstants;
use App\Http\Controllers\Controller;
use Illuminate\Http\{
    Request,
    Response
};

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

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
    }
}
