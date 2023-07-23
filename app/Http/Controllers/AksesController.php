<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class AksesController extends Controller
{
    public function aksesRT()
    {
        $data = User::all();
        return view('admin_apk.akses', compact("data"));
    }
    
    public function prosesAkses(Request $request)
    {
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/aksesRT');
    }

    public function loginRT()
    {
        return view('login');
    }
    public function loginRTProses(Request $request){
        // dd($request->all());
         if(Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }
        return redirect('login');
    }

  

}