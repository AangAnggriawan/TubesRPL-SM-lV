<?php

namespace App\Http\Controllers;

use App\Models\pindahan;
use App\Models\pindahankeluar;
use Illuminate\Http\Request;

class PindahanController extends Controller
{
    public function pindahan(){
        return view('aplikasi.pindahan');
    }
    public function masuk(){
        return view('aplikasi.masuk');
    }

    public function pindahMasuk(){
        $data = pindahan::all();
        return view('admin_apk.pindahanMasuk', compact("data"));
    }
    public function insertDataMasuk(Request $request){
        // dd($request->all());
        pindahan::create($request->all());
        return redirect()->route('pindahan');

    }

    public function keluar(){
        return view('aplikasi.keluar');
    }

    public function pindahanKeluar(){
        $data = pindahankeluar::all();
        return view('admin_apk.pindahanKeluar', compact("data"));
    }
    public function insertDataKeluar(Request $request){
        // dd($request->all());
        pindahankeluar::create($request->all());
        return redirect()->route('pindahan');

    }
}
