<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\User;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token=$user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message'=>'success',
            'user'=>$user,
            'token'=>$token
        ]); 
 
    }

    public function login(Request $request){
        $user = User::where('email', $request->email)->first();

        if($user &&  Hash::check($request->password, $user->password)){
            $token = $user->createToken('auth_token')->plainTextToken;
 
            return response()->json([
                'message'=>'success',
                'user'=>$user,
                'token'=>$token
            ]); 
        }else {
            return response()->json([
                'message'=>'error',
            ]); 
        }
    }
}
