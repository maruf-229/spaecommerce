<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use http\Exception;
use App\Http\Requests\RegisterRequest;
use Auth;
use DB;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //Login Methods
    public function login(Request $request)
    {
        try {
            if (Auth::attempt($request->only('email','password'))){
                $user=Auth::user();
                $token=$user->createToken('app')->accessToken;

                return response([
                    'message'=>'SuccessFully login',
                    'token'=>$token,
                    'user'=>$user
                ],200);
            }
        }catch (Exception $exception){
            return response([
                'message'=>$exception->getMessage()
            ],400);
        }

        return response([
            'message'=>'Invalid email or password'
        ],401);
    }

    //Register Method
    public function register(RegisterRequest $request){
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            $token = $user->createToken('app')->accessToken;

            return response([
                'message' => 'Successfully Registered',
                'token' => $token,
                'user' => $user
            ], 200);
        }catch (Exception $exception){
            return response([
                'message'=>$exception->getMessage()
            ],401);
        }
    }
}
