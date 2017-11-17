<nav class="navbar navbar-default">
        <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="https://domotek.es">
        <img alt="Brand" src="/img/logo.png" width="25px">
    </a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
        <li><a href="{{ route('inicio') }}">Inicio</a></li>
        @if(Request::url() == route("inicio"))
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="#contacto">Contacto</a></li>
        @endif
        @auth
            <li><a href="/herramientas">Herramientas</a></li>
        @endauth

    </ul>

    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @guest
            @if(Request::url() !== route('register'))
            <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
            @endif
            @if(Request::url() !== route('login'))
            <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesion</a></li>
            @endif
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">

                        <li><a href="#">Perfil</a></li>

                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                    </ul>
                </li>
                @endguest
    </ul>
</div>
</div>
</nav>