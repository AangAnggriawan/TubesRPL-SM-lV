@extends('template.admin')
@section('konten')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
    <h2 class="text-center mt-3" style="color: #000">Data Pindahan Keluar</h2>

    <table class="table mt-3" style="color: #000">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">NIK</th>
            <th scope="col">RT/TW Tujuan</th>
            <th scope="col">Desa Tujuan</th>
            <th scope="col">Kecamatan Tujuan</th>
            <th scope="col">Kabupaten Tujuan</th>
            <th scope="col">Provinsi Tujuan</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
          @php
              $no = 1;
          @endphp
        @foreach ($data as $row)
            <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->NIK }}</td>
            <td>{{ $row->rt_rw }}</td>
            <td>{{ $row->desa }}</td>
            <td>{{ $row->kecamatan }}</td>
            <td>{{ $row->kabupaten }}</td>
            <td>{{ $row->provinsi }}</td>
            </tr>
        @endforeach
            
        </tbody>
    </table>
    </div>
    
@endsection
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>