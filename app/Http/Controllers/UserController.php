<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(LoginRequest $request)
    {
        try {
            $credentials = $request->validate();

            return response()->json(['message' => 'Logado com sucesso!'], 200);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage(), 500]);
        }
    }
}
