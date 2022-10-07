@extends('layouts.auth-master')

@section('content')
<title>Login</title>
<style>
 /*@import url('https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Alternates|Poppins&display=swap');*/
  .btn-primary{
    
    position: relative;
      top: 5px;
        background-color: #3c45ec;
        border: none;
        border-radius: 35px;
        color: white;
        padding: 10px 30px;
        font-size: 1em;
        box-shadow: 0px 0px 10px 0px #5b5a5a;
        cursor: pointer;

  }
  .btn-primary:hover{
    box-shadow: none;
        background-color: rgb(96, 94, 94);
        color: #fff;
        transition: cubic-bezier(0.075, 0.82, 0.165, 1) 3.05s;
  }
  .mb-3{
   font-family:Georgia, 'Times New Roman', Times, serif;
  }
  .titulo{
    font-family:Georgia, 'Times New Roman', Times, serif;
  }
  .boton a{
    color: rgb(10, 10, 10);
  }
  .boton a:hover{
    
    text-decoration: none;
    background-color: rgb(96, 94, 94);
        color: #fff;
        transition: cubic-bezier(0.075, 0.82, 0.165, 1) 3.05s;
  }
</style>
<form action="/login" method="POST">
    @csrf
    <img src="https://www.lostrompos.com.mx/assets/user-default-1534028036fdbd765592addc5403fc97836cbb39353a38fa06a4be250a1ca874.jpg" alt="" width="150">
    <div class="titulo">
      <h1>Inicio de sesión</h1>
    </div>
    
    @include('layouts.partials.messages')

    <div class="form-floating mb-3">
      <input type="text" placeholder="Nombre / Email address" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <label for="exampleInputEmail1" class="form-label">Nombre / Email address</label>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="form-floating mb-3">
      <input type="password" placeholder="Password" name="password" class="form-control" id="exampleInputPassword1">
      <label for="exampleInputPassword1" class="form-label">Password</label>
    </div>
    <div class="boton ">
      <a href="/register">Crear cuenta</a>
    </div>
    <button type="submit" class="btn-primary">Iniciar sesión</button>
  </form>
  
@endsection   
    
