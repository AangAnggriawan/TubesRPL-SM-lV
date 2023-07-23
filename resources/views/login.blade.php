@extends('template')
<style>
    h1{
      color: #ffff;
      margin-top: 120px;
      margin-left: 59px;
      font-size: 36px;
      text-shadow: 0px 6px 6px rgba(0, 0, 0, 0.25);
    }
    .form{
      margin-top: 80px;
    }
    .input-group{
      width: 252px;
      margin: auto;
      height: 38px;
    }
    button{
      
      display: block;
      width: 154px;
      height: 44px;
      
      color: #ffff;
      font-size: 18px;
      line-height: 24.2px;
      background-color: #2EBD64;
      border: none;
      font-weight: 500;
    }
</style>
@section('konten')
    

    <h1 style="color: #ffff;
      margin-top: 120px;
      margin-left: 59px;
      font-size: 36px;
      text-shadow: 0px 6px 6px rgba(0, 0, 0, 0.25);">Login</h1>
 
    <div class="form" style="margin-top: 80px;">
      <form action="loginRTProses" method="POST">
      @csrf 
        <div class="input-group flex-nowrap" style="width: 252px; margin: auto; height: 38px;">
            <span class="input-group-text" id="addon-wrapping">@</span>
            <input type="text" class="form-control" name="email" placeholder="NIK" aria-label="Username" aria-describedby="addon-wrapping" required>
        </div>
        <div class="input-group flex-nowrap mt-5" style="width: 252px; margin: auto; height: 38px;">
            <span class="input-group-text" id="addon-wrapping">@</span>
            <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping" required>
        </div>
         <div class="masuk mt-5">
            <button style="margin: auto; border-radius: 50px;">Masuk</button>
        </div>
        </form>
    </div>
 
@endsection