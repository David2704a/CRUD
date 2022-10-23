@extends('layouts.register')


    
<title>Register</title>
<link rel="icon" type="image/png" href="/imagenes/logo.png">

<div class="img">
    <img src="/imagenes/logo-sena.png" width="50" alt="">
</div>
<div class="img2">
    <img src="/imagenes/logo.png" width="50" alt="">
</div>

<div class="container-form sign-up">
    <div class="welcome-back">
        <div class="message">
        <h2>Bienvenido</h2>
        <h3>si ya tienes una cuenta por favor inicia sesion aquí</h3>
        <div class="boton ">
            <a href="/login" class="btnLogin">
                <span id="span1"></span>
                <span id="span2"></span>
                <span id="span3"></span>
                <span id="span4"></span>
                Iniciar Sesión</a>
          </div>
    </div>
    </div>
    <form action="/register" method="POST" class="formulario" >
        @csrf
        @include('layouts.partials.messages')
        {!!  csrf_field() !!}
        <h2 class="create-account">Crear Cuenta</h2>
        <div class="iconos">
            <div class="border-icon">
                <i class='bx bxl-instagram'></i>
            </div>
            
            <div class="border-icon">
                <i class='bx bxl-facebook-circle' ></i>
            </div>
        </div>
        
        <p class="cuenta-gratis">Crear Cuenta Gratis</p>
        <input type="text" class="input1" name="names" placeholder="Nombre" >
        <input type="text" class="input2" name="apellidos" placeholder="Apellidos" id="">
        <input type="date" name="fecha" class="input3" placeholder="Fechas" id="">
        <input type="text" name="genero" class="input4" placeholder="Género" id="">
        <input type="text" name="telefono" class="input5" placeholder="Teléfono" id="">
        <input type="email" name="email" class="input6" placeholder="correo" id="">
        <input type="password" name="password" class="input7" placeholder="Contraseña" id="">
        <input type="password" name="password_confirmation" class="input8" placeholder="Confirmar Contraseña" id="">
            <button type="submit" class="btnRegistro">
            <span id="span1"></span>
            <span id="span2"></span>
            <span id="span3"></span>
            <span id="span4"></span>
            Registrar</button>
            <div class="cel">
                <img src="/imagenes/cel.png" width="550" alt="">
            </div>
 </form>
</div>

<div class="capa"></div>
<!--/////////////////////// EL DE INICIO DE SESIÓN ////////////////////-->

