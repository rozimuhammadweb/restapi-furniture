<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request as HttpRequest;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

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


        return $this->success('', ['token' => $user->createToken($request->email)->plainTextToken]);
    }

    public function register()
    {
    }

    public function changePassword()
    {
    }

    public function logout()
    {
    }


    public function user(HttpRequest $request)
    {
        return $this->response(new UserResource($request->user()));
    }
}
