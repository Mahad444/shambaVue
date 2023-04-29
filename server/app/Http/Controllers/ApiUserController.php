<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Exists;

class ApiUserController extends Controller
{
    // //
    // public function index(){
    //     $users=User::all();
    //     return $users;
    // }
    // public function show($id){
    //     $users=User::findorFail($id);
    //     return $users;
    // }
    public function store(Request $request){
        $request->validate([
            'name' =>['required', 'string', 'max:25'],
            'email'=>['required', 'string', 'email', 'max:25', 'unique:user'],
            'password' =>['required', 'string', 'min:8', 'confirmed']

        ]);
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);



        $user -> save();
        $token = $user->createToken('registertoken')->plainTextToken;
        return response([
            'user' => $user,
            'token' => $token,
            'message' => 'User registered successfully'
        ], 201);


    }
    public function login(Request $request) {
        $request->validate([

            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        //check email and password
        $user=User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password,$user->password)) {
            return response('invalid credentials',401);
        }
        $token=$user->createToken('logintoken')->plainTextToken;
        return response ([
            'user'=>$user,
            'token'=>$token
        ],201);
    }
    public function logout () {
        Auth::user()->tokens()->delete();
        return "user logged out";
    }
}
