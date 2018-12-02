<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function store(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'signin' => [
                'href' => 'api/v1/user/signin',
                'method' => 'POST',
                'params' => 'email, password'
            ]
        ];

        $response =[
            'msg' => 'User created',
            'user' => $user
        ];

        return response()->json($response,201);
        //return "It works";
    }

    public function signin(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $user = [
            'email' => $email,
            'password' => $password,
            'signin' => [
                'href' => 'api/v1/user/signin',
                'method' => 'POST',
                'params' => 'email, password'
            ]
        ];

        $response =[
            'msg' => 'Authenticated',
            'user' => $user
        ];

        return response()->json($response,200);
        //return "It works";
    }
}
