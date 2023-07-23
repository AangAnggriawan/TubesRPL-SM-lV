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
    .jumlah{

    }
    .jumlah .laki{
        width: 111px;
        height: 71px;
        background-color: #2EBD64;
        border-radius: 10px;
    }
    .jumlah .perempuan{
        width: 111px;
        height: 71px;
        background-color: #2EBD64;
        border-radius: 10px;
    }
    .btn{
        margin: auto;
    }
    .lapor button{
        display: block;
        width: 286px;
        height: 74px;
        border-radius: 10px; 
        margin-left: 25px;
        background-color: #2EBD64;
        color: #ffff;
        border: none;
    }
    
</style>
<script src="https://kit.fontawesome.com/2b3c02b5ef.js" crossorigin="anonymous"></script>
@extends('template.apk')



@section('konten')

<div class="nav">
    <h4 class="d-block mx-auto my-auto">Beranda</h4>
</div>
<h5 class="mt-5" style="margin-left: 30px;">Jumlah Penduduk</h5>
<div class="jumlah mt-5">
    <div class="jml" style="display: flex; text-align: center; color: #ffff; font-weight: bold">
        <div class="laki" style="margin: auto">Laki-Laki <br>50</div>
        <div class="perempuan" style="margin: auto">Perempuan <br>50</div>
    </div>   
</div>
<div class="lapor" style="margin: auto; text-align: center">
    <a href="deat" style="text-decoration: none"><button class="mt-5 mx-auto d-block">Laporan Kematian</button></a>
    <a href="pindahan" style="text-decoration: none"><button class="my-4 mx-auto d-block">Laporan Pindah</button></a>
</div>

@endsection