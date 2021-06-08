<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    public function authenticate(Request $request){
        $credential = $request->only('email','password');
        $validator = Validator::make($credential,[
            'email'=>'required',
            'password'=>'required'
        ]
        );
        if(!$validator->fails()){
            try{
                if(!$token = JWTAuth::attempt($credential)){
                    return response()->json(['status'=>'false','message'=>'Invalid Credentials']);
                }
            }catch(\Tymon\JWTAuth\Exceptions\JWTException $e){
                return response()->json(['status'=>'false','error'=>$e->getMessage(),'message'=>'Invalid Credentials']);
            }
            return response()->json([
                'status'=>'true',
                'token'=> compact('token'),
                'message'=>'Valid Credentials'
            ]);
        }else{
            return Response()->json(['status'=>'false','errors'=>$validator->errors()]);
        }
    }

    public function register(Request $request){
        return 0; // RAFA RAFA RAFA RAFA RAFA RAFA RAFA RAFA XD
    }
}
