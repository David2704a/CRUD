@extends('layouts.home')
<title>Inicio</title>
<link rel="icon" type="image/png" href="/imagenes/logo2.png">

@auth
{{-- <div class="msg1">
    <h5>Bienvenid@ <p>{{auth()->user()->names}}</p> estas logueado en nuestra app</h5>

</div> --}}




            
 <header class="header">

    <nav>
        <div class="logo">
            <img src="/imagenes/logo2.png">
            {{-- <div class="search">
                <img src="/imagenes/inicio/search.svg">
                <input type="search" placeholder="Buscar en Facebook">
            </div> --}}
        </div>
        <div class="navbar" id="navbar">
            <li><a class="btn active" href="/home"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li><a class="btn " href="#"><i class="fa fa-question" aria-hidden="true"></i></a></li>
        </div>

        <div class="options-two">
            <div class="profile">
                {{-- <img src="/img/DANICODEX.png"> --}}
                <a href="/perfil">Perfil</a>
            </div>
             <img src="/imagenes/inicio/menu.svg">
             <img src="/imagenes/inicio/messenger.svg">
             <img src="/imagenes/inicio/notifications.svg">
             <img src="/imagenes/inicio/menu-desplegable.svg">
             <a href="/logout">holaa</a>
        </div>
    </nav>
 </header>

    {{-- 
        =====================================
        BOTÓN DE SUBIR IMÁGENES
        =====================================
     --}}
     
 <section class="hero">

    <div class="container">
            <h2 style="position:relative; top:40px;" class="h2-sub">
                <span class="fil" >B</span>ienvenido
            </h2>
            <h1 style="position:relative; top:40px;" class="head">Restaurante</h1>
            <div class="he-des">
                <h5 style="position:relative; top:40px;">Lorem t dol</h5>
                <input style="position:relative; top:40px;" type="checkbox" id="btn-modal">
                <label style="position:relative; top:40px;" for="btn-modal" class="lbl-modal">¿Qué receta tienes en mente?</label>
                <div class="modal">
                    <div class="contenedor">
                        <header class="hero2">Crear publicación
                            <label for="btn-modal">X</label>
                        </header>
                    

                        {{-- 
                            =====================================
                            modal
                            =====================================
                         --}}
                        <div class="contenido">
                            <p>{{auth()->user()->names}} {{ auth()->user()->apellidos}}</p>


                            <div class="subir">
                                <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                <header class="heade">Arrastrar y soltar para cargar archivo</header>
                                <span>O</span>
                                
                            <form method="POST" action="{{ route('files.store') }}" enctype="multipart/form-data">
                                @csrf
                                
                                <input type="file" name="file" accept="image/*" >
                                @error('file')
                                    <small class="">{{ $message }}</small>
                                @enderror
                                <button type="submit" >Subir imagen </button>
                            </form>
                           
                        </div>

                        </div>
                        {{-- =======================================
                             TERMINA EL MODAL
                             =======================================
                        --}}
                    </div>
                </div>
            </div>
            
        </div>
        
 </section>


 <section class="publicaciones">
    
    @foreach ($files as $file )

    <div class="contenedor2">

        <header class="separacion">
          <div class="options">
            <button id="btn"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
          </div>
        </header>

        <div class="image" >
            <img src="{{ asset($file->url)}}" alt="">

        </div>
    </div>

    @endforeach

</section>



@endauth


{{-- 
    ==============================
    ENDGUEST
    ==============================
 --}}
@guest

<div class="msg">
    <h4>Para ver el contenido <a href="/login"> Inica sesión</a></h4>
</div>


<div class="cel">
    <img src="/imagenes/cel.png" width="550" alt="">
</div>




@endguest

