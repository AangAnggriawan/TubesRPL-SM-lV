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
.tanggal{
    position: relative;
    display: flex;
}
img{
    width: 37.56px;
    height: 33px;
    position: absolute;
    margin-top: 20px;
    margin-left: 237px;
    background-color: #fff;
    border-radius: 5px;
}
textarea{
    
    display: block;
    width: 225px;
    height: 117px;
    border-radius: 10px;
}

.kk{
    border: 1px solid;
    width: 225px;
    height: 33px;
    border-radius: 10px;
    margin-top: 10px;
    background-color: #fff;
}
.canvas{
    position: absolute;
    top: -60px;
}
.kirim button{
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
    <div class="nav mx-auto">
        <h4 class="d-block mx-auto my-auto">Laporan Kematian</h4>
    </div>
    <div class="bungkus" style="border: 1px;">
        <div class="input" style="width: 400px; height: 470px; overflow: auto">
           <form action="/insertKematian" method="POST" enctype="multipart/form-data">
            @csrf  
                <h5 class="mt-3 mx-5" style="font-size: 16px">Pelapor :</h5>
                <input type="text" class="form-control mx-5" placeholder="Nama Pelapor" name="pelapor">
                <input type="text" class="form-control mx-5" placeholder="Hubungan" name="hubungan">
                <h5 class="mt-3 mx-5" style="font-size: 16px">Melaporkan bahwa :</h5>
                <input type="text" class="form-control mx-5" placeholder="Nama" name="nama">
                <input type="text" class="form-control mx-5" placeholder="NIK" name="NIK">
                <input type="text" class="form-control mx-5" placeholder="Umur" name="umur">
                <input type="text" class="form-control mx-5" placeholder="Agama" name="agama">
                <input type="text" class="form-control mx-5" placeholder="RT/RW" name="rt_rw">
                <input type="text" class="form-control mx-5" placeholder="Kelurahan" name="desa">
                <input type="text" class="form-control mx-5" placeholder="Kecamatan" name="kecamatan">
                <h5 class="mt-3 mx-5" style="font-size: 16px">Telah meninggal pada :</h5>
                <input type="text" class="form-control mx-5" placeholder="Hari" name="hari">
                <input type="date" class="form-control mx-5" id="tanggalInput" name="tanggal">
                <input type="text" class="form-control mx-5" placeholder="Penyebeb kematian" name="penyebab">
                {{-- <div class="kk mx-5">
                    <input  type="file" id="upload" name="upload">
                </div> --}}
                <div class="kirim" style="margin-left: 50px">
                    <button class=" d-block ">Kirim Pelaporan</button>
                </div>
           </form>
        </div>
        
        
    </div>
        
@endsection

<script>
    function ambilTanggal() {
      // Mendapatkan nilai tanggal dari elemen input
      var tanggal = document.getElementById("tanggalInput").value;

      // Memisahkan tanggal, bulan, dan tahun menggunakan fungsi split()
      var tanggalArray = tanggal.split("-");
      var tanggalInput = parseInt(tanggalArray[2]);
      var bulanInput = parseInt(tanggalArray[1]);
      var tahunInput = parseInt(tanggalArray[0]);

      // Menampilkan tanggal yang dimasukkan pengguna
      console.log("Tanggal: " + tanggalInput);
      console.log("Bulan: " + bulanInput);
      console.log("Tahun: " + tahunInput);
    }
</script>
