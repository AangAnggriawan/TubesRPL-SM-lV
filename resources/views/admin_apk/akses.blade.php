
@extends('template.admin')
@section('konten')
<div class="container">
    
    <div class="akses " style="height: 800px">
      <h2 class="" style="color: #000; text-align: center; margin-top: 100px ">Hak Akses RT</h2>
        <form action="/prosesAkses" method="post">
        @csrf
            <div class="nama">
                <input type="text" id="inputPassword5" class="form-control mx-4" name="name" placeholder="Nama" aria-labelledby="passwordHelpBlock" style="width: 300px; background-color: #fff; color: #000">
            </div>
            <div class="Username">
                <input type="number" id="inputPassword5" class="form-control mx-4 my-1" name="email"  placeholder="Username" aria-labelledby="passwordHelpBlock" style="width: 300px; background-color: #fff; color: #000">
            </div>
            <div class="sandi">
                <input type="password" id="inputPassword5" class="form-control mx-4" placeholder="Password" name="password" aria-labelledby="passwordHelpBlock" style="width: 300px; background-color: #fff; color: #000">
            </div>
            <div class=" mt-3">
                <button type="submit" class="btn btn-primary btn-block mx-4" style="width: 300px">Daftarkan</button>
            </div>
        </form>
        <table class="table mt-3 mx-4" style="color: #000">
          <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Aksi</th>
              </tr>

               @php
                $no = 1;
                @endphp
            @foreach ($data as $row)
              <tr>
                <th scope="row">{{ $no++}}</th>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->password }}</td>
                <td>
                    <a href="" class="btn btn-success">Update</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            @endforeach
          </thead>
        </table>
    </div>
      
    </form>
    
</div>
    
@endsection
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>