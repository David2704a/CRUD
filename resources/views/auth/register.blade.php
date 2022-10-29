@extends('layouts.register')

<div class="contenedor-login">

    <!--========================================
        Slider
    ==========================================-->
    <div class="contenedor-slider">

        <div class="slider">

            <!-- foto 1 -->
            <div class="slide fade ">
                <img src="/imagenes/cocina.png" alt="">

                <div class="contenido-slider">

                    <div class="logo">
                        <img src="/imagenes/logo2.png" alt="">
                    </div>

                </div>

            </div>

            <!-- foto 2 -->
            <div class="slide fade">
                <img src="/imagenes/libro.png" width="500" alt="">

                <div class="contenido-slider">

                    <div class="logo">
                        <img src="/imagenes/logo2.png" alt="">
                    </div>


                </div>

            </div>


        </div>

        <!-- Botones  siguiente y anterior -->
        <a href="#" class="ante"><i class='bx bx-chevron-left'></i></i></a>
        <a href="#" class="siguiente"><i class='bx bx-chevron-right'></i></i></a>

        <!-- dots -->
        <div class="dots">

            <!-- <span class="dot active"></span> -->

        </div>

    </div>

    <!--========================================
        Formularios
    ==========================================-->
    <div class="contenedor-texto">

        <div class="contenedor-form">

            <h1 class="titulo">¡Bienvenido a Recip-NL!</h1>
            <div class="eslogan">
                <h5 class="descripcion">Reparte Recetas Reparte Amor.</h5>

            </div>
            <!-- Tabs -->
            <ul class="tabs-links">
                <li class="tab-link active">Regístrate</li>
            </ul>

            <!--========================================
                Formulario logue
            ==========================================-->
             <!--========================================
                Formulario de Registro
            ==========================================-->
            <form action="/register" method="POST" id="formRegistro" class="formulario active ">
                @csrf
                 @include('layouts.partials.messages')

                <input type="text" placeholder="Nombres" class="input-text" name="names" autocomplete="off"> 
                <input type="text" placeholder="Apellidos" class="input-text" name="apellidos" autocomplete="off"> 
                <input type="email" placeholder="Correo electrónico" class="input-text" name="email" autocomplete="off"> 
                <select name="genero" id="" class="input-text">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
                <input type="text" placeholder="Teléfono" class="input-text" name="telefono">
                <input type="date" placeholder="Fecha de nacimiento" class="input-text" name="fecha">

                <div class="grupo-input">

                    <input type="password" placeholder="Contraseña" name="password" class="input-text clave">
                    
                    <button type="button" class="icono fas fa-eye mostrarClave"></button>
                    
                </div>
                <div class="grupo-input">

                    <input type="password" placeholder="Confirmar Contraseña" name="password_confirmation" class="input-text clave">
                    
                    <button type="button" class="icono fas fa-eye mostrarClave"></button>
                    
                </div>
                
                <!-- Checkbox Personalizados -->
                <label class="contenedor-cbx animate">
                    Me gustaría recibir notificaciones sobre productos
                    <input type="checkbox" name="cbx_notificaciones" checked>
                    <span class="cbx-marca"></span>
                </label>

                 <label class="contenedor-cbx animate">
                    He leído y acepto los
                    <a href="#" class="link">Términos y Condiciones</a>
                    <a href="#" class="link">y Política de privacidad de mi Tienda</a>
                    
                    <input type="checkbox" name="cbx_terminos" >
                    <span class="cbx-marca"></span>

                </label>
                <a href="/login" class="link">¿Ya tienes cuenta?</a>

                <button class="btn" id="btnRegistro" type="submit">Crear Cuenta</button>

            </form>


        </div>

    </div>

</div>

