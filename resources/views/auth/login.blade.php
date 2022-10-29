    @extends('layouts.login')

    <link rel="icon" type="image/png" href="/imagenes/logo2.png">
    
    <main class="login-desing">
        
        <div class="olas">
            <div class="img">
                <img src="/imagenes/logo-sena.png" width="50" alt="">
            </div>
            <img class="img1" src="/imagenes/cel2.png" alt="">
            
            <div class="welcome">
                <div class="mensaje">
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
          
        </div>
        
        <div class="login">
           
            <div class="login-data">
                <img src="/imagenes/logo2.png" width="150" alt="">
                <div class="eslogan">
                    <h3>Reparte Recetas Reparte Amor</h3>
                </div>
                <h1>Inicio de Sesión</h1>

                
                <form action="/login" method="POST" class="formulario2">
                    @csrf
                    @include('layouts.partials.messages')
                    <div class="inputs">
                        <label for="" class="labels">
                            <input type="text" name="names" id="name" required>
                            <span class="Inlb"> Nombres / Correo</span>
                            <i class='bx bxs-user' ></i>
                        </label>
                    </div>
                    <div class="inputs">
                        <label for="" class="labels">
                            <input type="password" name="password" class=" clave"><span class="Inlb">Contraseña</span>
                            <i class='bx bxs-lock-alt' ></i>
                    
                            <button type="button" class="icono fas fa-eye mostrarClave"></button>
                            
                        </label>
                        
                    </div>
                    <button type="submit" class="btnInicio">
                        <span id="span1"></span>
                        <span id="span2"></span>
                        <span id="span3"></span>
                        <span id="span4"></span>
                        Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </main>
   