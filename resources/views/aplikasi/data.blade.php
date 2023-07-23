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
    button{
        background-color: #2EBD64;
        color: #ffff;
        border: none;
        /* float: right; */
        height: 51px;
        border-radius: 0px 10px 10px 0px;
    }
    .data{

        background-color: #888;
        border-radius: 5px;
        width: 300px;
        display: flex;
        position: relative;
        justify-content: space-between;

    }
    h5{
        margin-left: 10px;
        color: #ffff;
    }
    p{
        margin-left: 10px;
        color: #ffff;
        position: absolute;
        top: 20px;

    }
    .scrol{
        overflow: auto;
        height: 430px;
    }




</style>

@extends('template.apk')

@section('konten')
    <div class="nav mx-auto">
        <h4 class="d-block mx-auto my-auto">Data</h4>
    </div>
    <div class="pb-3 mt-3 mx-auto" style="width: 330px; height: 50px;">
        <form class="d-flex" action="" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value=""
                placeholder="Masukkan kata kunci" aria-label="Search" style="height: 40px">
            <button class="btn btn-secondary" type="submit" style="height: 40px">Cari</button>
        </form>
    </div>
    <div class="scrol">
        @foreach ($data as $row)
        <div class="data mx-auto my-2">
            <h5 style="font-size: 16px;">{{$row->nama}}</h5>
            <p>{{$row->NIK}}</p>
             <a href="/data_pribadi/{{$row->id}}">
                <button  style="border-radius: 0px 5px 5px 0px;"><i class="bi bi-chevron-right my-auto"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg></i></button>
            </a>
        </div>
        @endforeach
        
    </div>
    

@endsection

