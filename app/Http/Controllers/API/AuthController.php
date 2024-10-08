<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Auth;
use App\Http\Requests\RegistrationRequest;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials=$request->only(['email','password']);
        if(Auth::attempt($credentials))
        {
            $user=Auth::user();
            $token=$user->createToken('authtoken')->plainTextToken;

            return response()->json([
                'status'=>true,
                'token'=>$token,
                'message'=>'User logged in successfully',
                'data'=>$user
            ]);
        }else{
            return response()->json([
                'status'=>false,
                'message'=>'Wrong Email or Password'
            ]);
        }
    }



    public function register(RegistrationRequest $request)
    {
        $user = User::where('email',$request->email)->first();
        if(is_null($user))
        {
            $user = new User();
            $user->name =$request->get('name');
            $user->email=$request->get('email');
            $user->password=bcrypt($request->password);
            $user->save();

            $token=$user->createToken('authtoken')->plainTextToken;

            return response()->json([
                'status'=>true,
                'message'=>'user created successfully',
                'token'=>$token,
                'data'=>$user
            ]);
        }else {
          return response()->json([
            'status'=>false,
            'message'=>'user already exists'

          ]);  
        }
    }
}
