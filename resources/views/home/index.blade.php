@extends('layouts.home')
<title>Inicio</title>


@auth
{{-- <div class="msg1">
    <h5>Bienvenid@ <p>{{auth()->user()->names}}</p> estas logueado en nuestra app</h5>

</div> --}}

<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fa-solid fa-bars"></i>
    </label>
    <a href="#" class="enlace">
        <img src="/imagenes/logo2.png" width="60" class="logo" alt="">
    </a>
    
    <ul>
        <li><a href="#" class="active"><i class="fa-solid fa-house"></i>               Inicio</a></li>
        <li><a href="#">fgf</a></li>
        <li><a href="#">fgfg</a></li>
        <li><a href="#"><i class="fa-regular fa-bell"></i>               Notificaciones</a></li>
        <li><a href="/usuarios/6"><i class="fa-solid fa-user"></i>               Cuenta</a></li>
        <li><a href="/logout"><img src="/imagenes/icons/logout.svg" class="lista__img" alt="">               Cerrar sesión</a></li>
    </ul>
    <div class="input-box">
        <input type="text" placeholder="Buscar">
        <span class="buscar">
            <i class="uil uil-search search-icon"></i>
        </span>
        {{-- <i class="uil uil-times close-icon"></i> --}}
    </div>
</nav>
<section></section>



@endauth
@guest

<div class="msg">
    <h4>Para ver el contenido <a href="/login"> Inica sesión</a></h4>
</div>


<div class="cel">
    <img src="/imagenes/cel.png" width="550" alt="">
</div>




@endguest

