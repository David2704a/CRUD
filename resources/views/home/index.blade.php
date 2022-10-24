@extends('layouts.app-master')
<title>Inicio</title>


@auth
<div class="msg">
    <p>Bienvenid@ {{auth()->user()->name}} estas logueado en nuestra app</p>

</div>


	<header class="header">
		<div class="btn-menu">
				
			<label for="btn-menu" class="icon-food">Herramientas</label>
			
		</div>
		<input type="checkbox" id="btn-menu">
		<div class="container-menu">
			<div class="cont-menu">
				<nav>
					<a href="#" for="menu" class="icon-bookmark-2"> Guardado</a>
					<a href="#" for="menu" class="icon-cog-outline"> Configuración</a>
					<a href="#" for="menu" class="icon-puzzle-outline"> Atención al cliente</a>
					<a href="#" for="menu" class="icon-lock"> Privacidad y seguridad</a>
					<a href="/politicas de uso/" for="menu" class="icon-warning-empty"> Políticas de uso</a>
					<a href="/logout" for="menu" class="icon-cancel"> Cerrar sesión</a>
				</nav>
				<label for="btn-menu" class="icon-cancel"></label>
			</div>
		</div>
		<div class="container">
			
			<nav class="navegacion">
				<ul class="menu">
					<li><a href="#" for="menu" class="icon-bell-2">Notificaciones</a></li>
					<li><a href="#" for="menu" class="icon-heartbeat">Preguntas y Respuestas</a></Li>
					<li><a href="#" for="menu" class="icon-contacts">Contacto</a>
						<ul class="submenu">
							<li><a href="#">Servicio #1</a></li>
							<li><a href="#">Servicio #2</a></li>
							<li><a href="#">Servicio #3</a></li>
						</ul>
					<li><a href="/Perfil/index.html" for="menu" class="icon-user-circle-o">Perfil</a>
					</li>

				</ul>
			</nav>
		</div>
	</header>
	<div class="capa"></div>
	<div class="container-menu">
		<div class="cont-menu">
			<nav>
				<a href="#" for="menu" class="icon-bookmark-2"> Guardado</a>
				<a href="#" for="menu" class="icon-cog-outline"> Configuración</a>
				<a href="#" for="menu" class="icon-puzzle-outline"> Atención al cliente</a>
				<a href="#" for="menu" class="icon-lock"> Privacidad y seguridad</a>
				<a href="/politicas de uso/" for="menu" class="icon-warning-empty"> Políticas de uso</a>
				<a href="/logout" for="menu" class="icon-cancel"> Cerrar sesión</a>
			</nav>
			<label for="btn-menu" class="icon-cancel"></label>
		</div>
	</div>



	<div class="buscar">
		<input type="text" placeholder="Buscar" required />

		<div class="btn-search">
			<i class="fas fa-search icon"></i>
		</div>
	</div>


@endauth
@guest
<div class="msg">
    <p>Para ver el contenido <a href="/login"> Inica sesión</a></p>
</div>
    
@endguest


   