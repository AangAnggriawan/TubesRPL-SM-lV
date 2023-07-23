<style>
    .nav{
        width: 360px;
        height: 70px;
        background-color: #2EBD64;
        border-radius: 20px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        color: #ffff;
        overflow: hidden;
        
    }

    .input input{
        margin-top: 20px;
        width: 225px;
        height: 33px;
        
    }
    button{
    width: 225px;
    height: 35px;
    border-radius: 20px;
    color: #fff;
    background-color: #2EBD64;
    font-size: 14px;
    line-height: 16.94px;
    border: none;
    margin-top: 30px;
}
</style>

@extends('template.apk')

@section('konten')
    <div class="nav">
        <h4 class="d-block mx-auto my-auto">Pindahan Keluar</h4>
    </div>
    <div class="input mt-4">
        <form action="/insertDataKeluar" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" class="form-control mx-auto" name="nama" placeholder="Nama">
            <input type="text" class="form-control mx-auto" name="NIK" placeholder="NIK">
            <br>
            <h5 class="mx-5" style="font-size: 16">Alamat Tujuan :</h5>
            <input type="text" class="form-control mx-auto" name="rt_rw" placeholder="RT/RW">
            <input type="text" class="form-control mx-auto" name="desa" placeholder="Kel/Desa">
            <input type="text" class="form-control mx-auto" name="kecamatan" placeholder="Kecamatan">
            <input type="text" class="form-control mx-auto" name="kabupaten" placeholder="Kab/Kota">
            <input type="text" class="form-control mx-auto" name="provinsi" placeholder="Provinsi">
            <button class="mx-auto d-block mt-4" style="border-radius: 20px;">Kirim Pelaporan</button>
        </form>
    </div>

@endsection