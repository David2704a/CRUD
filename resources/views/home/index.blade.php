@extends('layouts.app-master')
<title>Inicio</title>


@auth
<div class="msg1">
    <h5>Bienvenid@ <p>{{auth()->user()->names}}</p> estas logueado en nuestra app</h5>

</div>


<section>

    <header class="header">
        <div class="container">
            <div class="btn-menu">
                <label for="btn-menu" class="icon-food"></label>

                <div class="logo">
                    <h1>Herramientas</h1>
                </div>
            </div>
            <div class="icons">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAATxJREFUSEvt1+9NwzAQh+G3E8AGZQS6AUwATABMUDEBdBOYoDABbABsUDaACUA/dJZcK3VyZ0v90vvUpHEe/zmf2xl7itmeXFrgG+AXeIp0Pgo/AtcG6vOtF4/AOZo8N+6Fc/TH1KPIyD1wiZ4Z+Aa48anwEPph8CngxqfANTStsRsfg6egIbwGe1A3vguOoC58CG5BJ+MlrCR5t9bap9oyKXu9xalMuEX+rhIW9GrCFfDs1YrnL4G13Tu3bfd/WYO3Hgx2IB9IGD4BloCmcCg2wB3wnX3ZBda0X4yM/AXQ9KboAuvsVXwBGl0emo253ciXryu8Ah4KWNf3B9jqQNqe4axOa3yYauVU1+QKFqudzaq1Wq20R9Oe7IV/lhVv6Fg8tuqjotAjVEJ11OaltOmfRFOnxn5zNb281vgPwvZ9H4ax8OgAAAAASUVORK5CYII="/>
            </div>
        </div>
    </header>
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <div class="img1">
                <img src="/imagenes/logo.png" width="80" alt="">
            </div>
            <nav class="nav">
                <ul class="lista">
                    <li class="lista__item">
                        <div class="lista__button">
                            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yI/r/qirqv2EkNyF.png?_nc_eui2=AeH0adFBqZXO8W41pExX8FhOCyhAWu0ODAELKEBa7Q4MASnNWmAh3NctwjrVnSqb84jOrBn26PyItLpTZccSbrYt" width="29" class="lista__img" alt="">
                            <a href="#" class="nav__link">Guardados</a>
                        </div>
                    </li>
                    <li class="lista__item lista__item--click">
                        <div class="lista__button lista__button--click">
                            <img src="/imagenes/icons/message.svg" class="list__img">
                            <a href="#" class="">Contáctanos</a>
                            <img src="/imagenes/icons/arrow.svg" class="lista__arrow" alt="">
                        </div>
                        <ul class="lista__show">

                            <li class="lista__inside">
                                <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
                            </li>

                            <li class="lista__inside">
                                <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
                            </li>

                            <li class="lista__inside">
                                <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
                            </li>
                        </ul>
                    </li>


                    <li class="lista__item">
                        <div class="lista__button">
                            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yN/r/P3LEV6Y0FCf.png?_nc_eui2=AeEov8g5JWlJ0TlupIRMBzbmjhug5qw8P0qOG6DmrDw_SmnHG5T1tJIE87M11jUryZrZpsh9ofBw7Tx1WfgUJkkx" width="29" class="lista__img" alt="">
                            <a href="#" class="">Amigos</a>
                        </div>
                    </li>

                    <li class="lista__item  lista__item--click">
                        <div class="lista__button lista__button--click">
                            <img src="/imagenes/icons/setting.svg" alt="">
                            <a href="#" class="">Configuración y Privacidad</a>
                            <img src="/imagenes/icons/arrow.svg" class="lista__arrow" alt="">
                        </div>
                        <ul class="lista__show">

                            <li class="lista__inside">
                                <a href="#" class="nav__link--inside">Ayuda y soporte técnico</a>
                            </li>

                            <li class="lista__inside">
                                <a href="#" class="nav__link--inside">Registro de actividad</a>
                            </li>

                            <li class="lista__inside">
                                <a href="#" class="nav__link--inside">Idioma</a>
                            </li>
                        </ul>
                    </li>
                    <li class="lista__item">
                        <div class="lista__button">
                            <img src="/imagenes/icons/info.svg" class="lista__img" alt="">
                            <a href="#" class="">Atención al cliente</a>
                        </div>
                    </li>

                    <li class="lista__item">
                        <div class="lista__button">
                            <img src="/imagenes/icons/logout.svg" class="lista__img" alt="">
                            <a href="/logout" class="">Cerrar Seción</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <label for="btn-menu" class="icon-cancel">
            </label>
        </div>
    </div>
</section>

@endauth
@guest

<div class="msg">
    <h4>Para ver el contenido <a href="/login"> Inica sesión</a></h4>
</div>


<div class="cel">
    <img src="/imagenes/cel.png" width="550" alt="">
</div>




@endguest
<div class="capa"></div>
