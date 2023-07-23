<?php

namespace App\Http\Controllers;

use App\Models\kematian;
use App\Models\Masyarakat;
use Illuminate\Http\Request;

class RPL_tubes extends Controller
{
    public function home(){
        return view('aplikasi.home');
    }
    public function data(){
        $data = Masyarakat::all();
        return view('aplikasi.data', compact('data'));
    }
    public function propil(){
        return view('aplikasi.propil');
    }
    public function data_pribadi($id){
        $data = Masyarakat::find($id);
        return view('aplikasi.data_pribadi', compact('data'));
    }
    public function update(){
        return view('aplikasi.update');
    }
    public function admin(){
        return view('aplikasi.admin');
    }
    public function deat(){
        return view('aplikasi.deat');
    }

    public function kematian(){
        $data = kematian::all();
        return view('admin_apk.kematian', compact('data'));
    }


    public function insertKematian(Request $request){
        // dd($request->all());
        kematian::create($request->all());
        return redirect()->route('home');

    }


    
}
