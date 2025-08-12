{{-- resources/views/partials/navbar.blade.php --}}
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}">
            <img src="{{ asset('img/logo1.png') }}" class="navbar-logo" alt="Logo Digit Connection">
        </a>



        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav navi">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                </li>
            </ul>

            <div class="theme-switcher d-flex align-items-center justify-content-end ml-auto">
                <input type="checkbox" id="theme-toggle" />
                <label for="theme-toggle" class="switch-label">🌙</label>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <ul class="navbar-nav ml-3">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('img/avat_1.png') }}" alt="User Icon" class="img_icon">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right bg-indigo-900" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/login') }}">Iniciar Sesión</a>
                        <a class="dropdown-item" href="{{ url('/register') }}">Registrarse</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>