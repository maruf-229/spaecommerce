<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgotRequest;
use App\Http\Requests\ResetRequest;
use Illuminate\Http\Request;
use App\Mail\ForgotMail;
use App\Models\User;
use http\Exception;
use DB;
use Illuminate\Support\Facades\Hash;
use Mail;


class ForgotController extends Controller
{
    //forgot password
    public function forgotPassword(ForgotRequest $request){
        $email=$request->email;

        if (User::where('email',$email)->doesntExist()){
            return response([
                'message'=>'Email Not Found'
            ]);
        }

        //generate random token
        $token=rand(10,100000);

        try {
            DB::table('password_resets')->insert([
                'email'=>$email,
                'token'=>$token
            ]);

            Mail::to($email)->send(new ForgotMail($token)); //mail sent to user

            return response([
                'message'=>'Reset Password mail send to your mail'
            ],200);

        }catch (Exception $exception){
            return response([
                'message'=>$exception->getMessage()
            ],400);
        }

    }

    //reset password
    public function resetPassword(ResetRequest $request){
        $email=$request->email;
        $token=$request->token;
        $password=Hash::make($request->password);

        $emailcheck=DB::table('password_resets')->where('email',$email)->first();
        $pincheck=DB::table('password_resets')->where('token',$token)->first();

        if (!$emailcheck){
            return response([
                'message'=>'Email not found'
            ],401);
        }
        if (!$pincheck){
            return response([
                'message'=>'Pin code invalid'
            ],401);
        }

        DB::table('users')->where('email',$email)->update(['password'=>$password]);
        DB::table('password_resets')->where('email',$email)->delete();

        return response([
            'message'=>'Password Changed Successfully'
        ],200);
    }
}
