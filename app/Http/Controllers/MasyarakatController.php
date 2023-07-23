<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function masyarakat(Request $request){
        if($request->has('search')){
            $data = Masyarakat::where('nama','LIKE','%' .$request->search.'%')->paginate(5);;
        }else{
            $data = Masyarakat::paginate(5);
        }
        return view('admin_apk.masyarakat', compact("data"));
    }
    public function tambahData(){
        // $data = Masyarakat::all();
        return view('admin_apk.tambahData');
    }
    public function insertData(Request $request){
        // dd($request->all());
        Masyarakat::create($request->all());
        return redirect()->route('masyarakat')->with('success','Data berhasil di tambahkan');

    }

    public function tampilData($id){
        $data = Masyarakat::find($id);
        // dd($data);
        return view('admin_apk.tampilData', compact("data"));
    }
    public function tampilupdate($id){
        $data = Masyarakat::find($id);
        // dd($data);
        return view('admin_apk.update', compact("data"));
    }

    public function updateData(Request $request, $id){
        $data = Masyarakat::find($id);
        // dd($data); 
        $data->update($request->all());
        return redirect()->route('masyarakat')->with('success','Data berhasil di update');

    }

    public function delete($id){
        $data = Masyarakat::find($id);
        // dd($data); 
        $data->delete();
        return redirect()->route('masyarakat')->with('success','Data berhasil di hapus');

    }
}
