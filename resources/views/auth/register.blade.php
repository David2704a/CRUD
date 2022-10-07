@extends('layouts.auth-master')

@section('content')
<style>
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
   <title>Register</title>
    <form action="/register" method="POST">
        @csrf
        
       <img src="https://th.bing.com/th/id/OIP.XtPge0QXewrU2NWyjhVZfgHaHQ?pid=ImgDet&rs=1" alt="" width="150">
        <div class="titulo">
          <h1>REGISTRO</h1>
        </div>
        
        @include('layouts.partials.messages')
        <div class="form-floating mb-3">
            <input type="email" placeholder="Email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="form-floating mb-3">
          <input type="date" placeholder="Fecha de nacimiento" name="fecha" class="form-control" id="exampleInputPassword1">
        <label for="exampleInputPassword1" class="form-label">Fecha de nacimiento</label>
      </div>
        <div class="form-floating mb-3">
            <input type="text" placeholder="Nombre" name="name" class="form-control" id="exampleInputPassword1">
          <label for="exampleInputPassword1" class="form-label">Nombre</label>
        
        </div>
        <div class="form-floating mb-3">
            <input type="password" placeholder="Contraseña" name="password" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" placeholder="Confirmar contraseña" name="password_confirmation" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Confirmar contraseña</label>
          </div>
          <div class="boton">
            <a href="/login">Ya tengo cuenta</a>
          </div>
        <button type="submit" class="btn-primary">Crear cuenta</button>
      </form>
    @endsection