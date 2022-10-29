@extends('layouts.app-master')
@section('content')
<title>Inicio</title>
<h1>HOME</h1>

@auth
<p>Bienvenid@ {{auth()->user()->names}} estas logueado en nuestra app</p>


@endauth
@guest
    <p>Para ver el contenido</p><a href="/login"> Inicia sesión</a>
@endguest

@endsection
   