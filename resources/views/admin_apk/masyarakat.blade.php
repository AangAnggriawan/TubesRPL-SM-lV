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
      <h2 class="text-center mt-3" style="color: #000; position: absolute; margin-left: 430px;">Data Masyarakat</h2>
      <a href="tambahData"><button type="submit" class="btn btn-primary my-3">+ Tambah</button></a>
      @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{$message}}
          </div>
      @endif
      <form action="masyarakat" method="GET">
        <input type="search" id="inputPassword5" class="form-control" 
        name="search" aria-labelledby="passwordHelpBlock" placeholder="Search" style="background-color: #fff; width: 250px; color: #000">
      </form>
      <table class="table mt-3 mx-4" style="color: #000">
          <thead>
              <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">NIK</th>
              <th scope="col">No KK</th>
              <th scope="col">Tempat Lahir</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Kampung</th>
              <th>Aksi</th>
              </tr>
          </thead>
          <tbody class="table-group-divider">
            @php
                $no = 1;
            @endphp
          @foreach ($data as $index => $row)
              <tr>
              <th scope="row">{{ $index + $data-> firstItem() }}</th>
              <td>{{ $row->nama }}</td>
              <td>{{ $row->NIK }}</td>
              <td>{{ $row->KK }}</td>
              <td>{{ $row->tmptlahir }}</td>
              <td>{{ $row->jenis_kelamin }}</td>
              <td>{{ $row->kp }}</td>
              
              <td>
                  
                  <a href="/tampilData/{{$row->id}}" class="btn btn-success">View</a>
                  <a href="/tampilupdate/{{$row->id}}" class="btn btn-success">Update</a>
                  <a href="/delete/{{$row->id}}" class="btn btn-danger">Delete</a>
              </td>
              </tr>
          @endforeach
              
          </tbody>
      </table>
      {{ $data->links() }}
    
    </div>
    <br><br>
@endsection
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>