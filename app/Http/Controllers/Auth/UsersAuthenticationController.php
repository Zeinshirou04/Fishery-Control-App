<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class UsersAuthenticationController extends Controller
{
    public function createToken(LoginRequest $request) {

        $request->authenticate();

        $token = $request->user()->createToken($request->token_name);
        if($token) return response()->json([
            'status' => 'success',
            'token' => $token->plainTextToken
        ]);
    }
}
