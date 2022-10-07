@extends('layouts.app-master')
@section('content')
<title>Inicio</title>
<h1>HOME</h1>

@auth
<p>Bienvenid@ {{auth()->user()->name}} estas logueado en nuestra app</p>


@endauth
@guest
    <p>Para ver el contenido <a href="/login"> Inica sesión</a></p>
@endguest

@endsection
   