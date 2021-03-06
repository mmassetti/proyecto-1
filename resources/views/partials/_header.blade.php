<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
    <div class="header-warp">

        <div class="header-bar-warp d-flex">
            <!-- site logo -->
            <a href="/" class="site-logo">
                <img src="{{asset('/img/logo.png')}}" alt="GoodGame!">
            </a>

            <!--Menu derecha -->
            <nav class="top-nav-area w-100">
                <div class="user-panel">
                    @guest
                    <a href="{{ url('login') }}">Ingresar</a> /
                    <a href="{{ url('register') }}">Registrarse</a> @endguest 
                    @auth
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" style="position: relative; padding-left:50px;">
                                <img src="{{asset('/img/avatars').'/'.auth()->user()->avatar}}" style="width:32px; height:32px; position:absolute; top:0px;left:10px; border-radius:50%" alt=".">
                                {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('user_profile',Auth::user()->name)}}"> <p style="color:black;"> Mi perfil </p></a>
                            <a class="dropdown-item" href="{{ route('listings.index')}}"> <p style="color:black;"> Mis listas </p></a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <p style="color:black;"> Cerrar sesión </p>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>         

                    @endauth
                </div>

                <!-- Menu principal -->
                <ul class="main-menu primary-menu">
                    <li><a href="/">Inicio</a></li>
                    @auth
                        <li><a href="{{route('listings.index')}}">Listas</a>
                        
                            <ul class="sub-menu">
                                @auth
                                    <li><a href="{{route('listings.index')}}"> Mis listas </a></li>
                                    <li><a href="{{route('listings.create')}}"> Nueva lista </a></li>
                                @endauth
                                <li><a href="{{url('publicListings')}}"> Listas públicas </a></li>
                                <li><a href="{{url('searchlisting')}}"> Buscar listas de usuarios </a></li>
                            </ul>
                        </li>
                    @endauth
                    @guest
                        <li><a href="{{route('listings.index')}}">Listas</a> </li>
                        <li><a href="{{url('publicListings')}}"> Listas públicas </a></li>

                        <li><a href="{{url('searchlisting')}}">Búsqueda</a> </li>
                    @endguest

                    @auth
                        <li><a href="{{route('games.create')}}">Agregar juego</a></li>
                
                        <li><a href="{{ route('user_profile', Auth::user()->name) }}">Perfil</a></li>
                    @endauth

                    <li><a href="{{url('about') }}">Preguntas frecuentes</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Header section end -->