<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' =>'required|min:5'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = new User([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password)
        ]);

        if($user->save()){
            $user->signin = [
                'href' => 'api/v1/user/signin',
                'method' => 'POST',
                'params' => 'email, password'
            ];
            $response =[
                'msg' => 'User created',
                'user' => $user
            ];

            return response()->json($response,201);
        }
        $response =[
            'msg' => 'An error occurred',
        ];

        return response()->json($response, 404);
    }

    /**
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function signin(Request $request){

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
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
