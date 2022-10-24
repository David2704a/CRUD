@extends('layouts.login')

<link rel="icon" type="image/png" href="/imagenes/logo.png">

<div class="img">
    <img src="/imagenes/logo-sena.png" width="50" alt="">
</div>
<div class="img2">
    <img src="/imagenes/logo.png" width="50" alt="">
</div>


<div class="container-form sign-in">
  <div class="welcome-back">
    <div class="message">
        <h2>Bienvenido de nuevo</h2>
        <p>Si aun no tienes una cuenta por favor registrese aqui</p>
        <div class="boton ">
          <a href="/register" class="btnLogin">
              <span id="span1"></span>
              <span id="span2"></span>
              <span id="span3"></span>
              <span id="span4"></span>
              Registrarse</a>
        </div>
    </div>
</div>

<form action="/login" method="POST" class="formulario2">
    @csrf
    @include('layouts.partials.messages')
          <h2 class="create-account">Iniciar Sesion</h2>
          <div class="iconos">
              <div class="border-icon">
                  <i class='bx bxl-instagram'></i>
              </div>
            
              <div class="border-icon">
                  <i class='bx bxl-facebook-circle' ></i>
              </div>
          </div>
          <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
          <input type="text" name="names" ba placeholder="Nombre/Correo">
          <input type="password" name="password" placeholder="Contraseña">
         
          <button type="submit" class="btnInicio">
            <span id="span1"></span>
            <span id="span2"></span>
            <span id="span3"></span>
            <span id="span4"></span>
            Iniciar Sesión</button>
      

  </form>
</div>

<div class="capa"></div>