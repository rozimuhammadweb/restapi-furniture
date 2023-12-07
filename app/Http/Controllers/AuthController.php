<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{


    public function login(LoginRequest $request)
    {

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return response()->json([
            'token' => $user->createToken($request->email)->plainTextToken
        ]);
    }

    public function register()
    {

    }


    public function logout()
    {

    }


    public function user(Request $request)
    {
        return $request->user();
    }


}
