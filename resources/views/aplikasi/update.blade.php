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
</style>

@extends('template.apk')

@section('konten')
    <div class="nav mx-auto">
        <h4 class="d-block mx-auto my-auto">Ubah Data</h4>
    </div>


    <div id="table-container" class="mt-4" style="height: 450px; overflow: auto">
        <table class="table table-striped mt-4 ">
            <tr>
                <td>Nama</td>
                <td><input type="text" style="border: none"> Aang</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>3206050308000001</td>
            </tr>
            <tr>
            <td>Tempat Lahir</td>
            <td>Tasikmalaya</td>
            </tr>
            <tr>
            <td>Jenis Kelamin</td>
            <td>Laki Laki</td>
            </tr>
            <tr>
            <td>Alamat :</td>
            <td></td>
            </tr>
            <tr>
            <td>KP</td>
            <td>Cibuntu</td>
            </tr>
            <tr>
            <td>RT/RW</td>
            <td>004/003</td>
            </tr>
            <tr>
            <td>Kel/Desa</td>
            <td>Cayur</td>
            </tr>
            <tr>
            <td>Kecamatan</td>
            <td>Cikatomas</td>
            </tr>
            <tr>
            <td>Agama</td>
            <td>Islam</td>
            </tr>
            <tr>
            <td>Kawin</td>
            <td>Belum</td>
            </tr>
            <tr>
            <td>Pekerjaan</td>
            <td>Mahasiswa</td>
            </tr>
            <tr>
            <td>Kenegaraan</td>
            <td>WNI</td>
            </tr>
            <tr>
                <td class="mx-auto"><button>Kirim Laporan</button></td>
            </tr>
            
        </table>
    </div>
@endsection