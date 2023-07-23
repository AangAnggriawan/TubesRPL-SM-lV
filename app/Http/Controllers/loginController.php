<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class loginController extends Controller
{
    public function login(){
        return view('login.login');
    }
    public function loginProses(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }
        return redirect('login');
    }
    public function register(){
        return view('login.register');
    }
    public function registerUser(Request $request){
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }

    // Login RT
    
}
