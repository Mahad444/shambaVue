<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiAuthController extends Controller
{
    //
    public function register(Request $request ){
        $request -> validate([
            'name'=>['required','min:2'],
            'email'=>['required'],
            'password'=>['required','string', 'confirmed'],


        ]);
        $users=new User();
        $users->name=$request->name;
        $users->email=$request->email;
        $users->password = $request->password;


        $users->save();

        $token = $users->createToken('registerToken')->plainTextToken;

        return response([
            'users'=>$users,
            'token'=>$token,
        ],201);


    }

}
