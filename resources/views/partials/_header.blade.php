<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
    <div class="header-warp">

        <div class="header-social d-flex justify-content-end">
            <p>Escribinos!:</p>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <!--<a href="#"><i class="logo email"></i></a>-->
        </div>

        <div class="header-bar-warp d-flex">
            <!-- site logo -->
            <a href="home.html" class="site-logo">
                <img src="{{asset('/img/logo.png')}}">
            </a>

            <nav class="top-nav-area w-100">
                <div class="user-panel">
                    @guest
                    <a href="{{ url('login') }}">Ingresar</a> /
                    <a href="{{ url('register') }}">Registrarse</a> @endguest @auth
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <a href="./logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Salir
                            </a> /
                    <a href="./register">Registrarse</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endauth
                </div>

                <!-- Menu -->
                <ul class="main-menu primary-menu">
                    <li><a href="./">Inicio</a></li>
                    <li><a href="./games">Juegos</a>
                        <ul class="sub-menu">
                            <li><a href="game-single.html">Game Singel</a></li>
                        </ul>
                    </li>
                    <li><a href="./about">Nosotros</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Header section end -->