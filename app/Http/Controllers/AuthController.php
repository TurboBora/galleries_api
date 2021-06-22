<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $newUser = User::create($data);


        $token = auth('api')->login($newUser);

        return response()->json([
            'success' => true, 
            'token' => $token,
            'message' => 'You have successfully created account']);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $token = auth('api')->attempt($credentials);
        if (!$token){
            return response()->json([
                'message' => 'Unauthenticated'], 401);
        }
        return [
            'token' => $token,
            'user' => auth('api')->user(),
        ];
    }

    public function logout()
    {
        auth('api')->logout();
        return response()->json([
            'success' => true, 
            'message' => 'Bye! Hope to see you soon!']);
    }

    public function currentUser()
    {
        return auth('api')->user();
    }

    public function refreshToken()
    {
        $token = auth('api')->refresh();
        return [
            'token' => $token,
        ];
    }
}

