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

    .data{
        border-radius: 5px;
        width: 340px;
        display: flex;
        position: relative;
        /* justify-content: space-between; */

    }
    h5{
        margin-left: -28px;
        color: #ffff;
    }
    p{
        margin-left: 70px;
        color: #000;
        position: absolute;
        top: 25px;
    }
    .data button{
        border-radius: 20px;
        margin-top: 10px;
        height: 30px;
    }
</style>
@extends('template.apk')

@section('konten')
<div class="nav mx-auto">
        <h4 class="d-block mx-auto my-auto">Data Pribadi</h4>
</div>

<div class="data mx-auto my-2">
    <i class="bi bi-person-circle"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></i>
    <h5 style="font-size: 16px; margin-left: 20px">{{$data->nama}}</h5>
    <p>{{$data->NIK}}</p>
</div>
  <form action="/data_pribadi/{{$data->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div id="table-container container" style="height: 450px; overflow: auto" >
      <table class="table table-striped mt-4 " style="height: 450px; overflow: auto">
          <tr>
            <td>No KK</td>
            <td>{{$data->KK}}</td>
          </tr>
          <tr>
          <td>Tempat Lahir :</td>
          <td>{{$data->tmptlahir}}</td>
          </tr>
          <tr>
          <td>Tanggal Lahir</td>
          <td>{{$data->tglahir}}</td>
          </tr>
          <tr>
          <td>Jenis Kelamin</td>
          <td>{{$data->jenis_kelamin}}</td>
          </tr>
          <tr>
          <td>Kampung</td>
          <td>{{$data->kp}}</td>
          </tr>
          <tr>
          <td>RT/RW</td>
          <td>{{$data->rt_rw}}</td>
          </tr>
          <tr>
          <td>Agama</td>
          <td>{{$data->agama}}</td>
          </tr>
          <tr>
          <td>Status Nikah</td>
          <td>{{$data->nikah}}</td>
          </tr>
          <tr>
          <td>Pekerjaan</td>
          <td>{{$data->pekerjaan}}</td>
          </tr>
          
        </table>
    </div>
  </form>
@endsection

{{-- <div id="table-container" style="height: 400px; overflow: auto">
  <table class="table table-striped mt-4 ">
      <tr>
        <td>Nama</td>
        <td>Aang</td>
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
</div> --}}