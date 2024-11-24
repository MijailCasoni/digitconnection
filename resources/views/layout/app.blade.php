<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DigitConnection</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- Optional JavaScript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            @endif
        <!--Aqui van los estilos para modificar inline-->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <style>
            
        </style>
        
    </head>
    <body class="font-sans antialiased dark:text-white/50 @yield('body-class')">
        <div class="bg-gray-50 text-black/50 dark:text-white/50">
           
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#08277a] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
<header>
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#">Digit-Connection</a>
            
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav navi">
                            <li class="nav-item active">
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
                            <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
                            </li>
                        </ul>
                        <div class="theme-switcher">
                            <input type="checkbox" id="theme-toggle" />
                            <label for="theme-toggle" class="switch-label">🌙</label>
                        </div>
                    </div>
                  </nav>
              
</header>            
          <!-- Content -->
      @yield('content')
  
                </div>
            </div>
        </div>
    </body>

    <footer class="text-sm footer-general">
      <div class="footer-container">

        <div class="menus-footer">
          <div class="menu-footer">
            <p class="titulo">Empresa<span class="mas" data-id="0"></span></p>
            <ul id="ul-menu-footer-0" class="ul-footer">
              <li><a href="https://digitconnection.com/contacto/" title="Contacto">Contacto</a></li>
              <li><a href="https://digitconnection.com/programa-de-afiliados/" title="Programa de afiliados">Programa de afiliados</a></li>
              <li><a href="https://digitconnection.com/opiniones/" title="Opiniones">Opiniones</a></li>
              <li><a href="https://digitconnection.com/working" title="Trabaja con nosotros" target="_blank">Trabaja con nosotros</a></li>
            </ul>
          </div>
          <div class="menu-footer">
            <p class="titulo">Producto<span class="mas" data-id="1"></span></p>
            <ul id="ul-menu-footer-1" class="ul-  footer">
              <li><a href="https://digitconnection.com/productos/" title="Productos">Productos</a></li>
              <li><a href="https://digitconnection.com/productos/hosting" title="Productos">Servicios de alojamiento</a></li>
              <li><a href="https://digitconnection.com/serviciosplus" title="Nuestros servicios">Nuestros servicios</a></li>
              <li><a href="https://digitconnection.com/tecnologias" title="tecnologias">Que tecnologías aplicamos a tus proyectos?</a></li>
              <li><a href="https://digitconnection.com/blog" title="Novedades">Novedades</a></li>
            </ul>
          </div>
      </div>

          <div class="subfooter-general acotado">
            <div class="copyright"><p>Digit-connection Copyright&copy; Todos los derechos reservados, 2024</p></div>
              <div class="menu-legal">
                <nav role="navigation">
                  <ul id="menu-legal-es" class="nav nav-legal">
                    <li id="menu-item-96535" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-96535"><a rel="privacy-policy" href="https://metricool.com/es/terminos-legales/" data-megamenu="96535">Términos y Condiciones</a></li>
                    <li id="menu-item-96288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96288"><a href="https://metricool.com/es/politica-privacidad/" data-megamenu="96288">Política de privacidad</a></li>
                    <li id="menu-item-96289" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96289"><a href="https://metricool.com/es/politica-de-cookies/" data-megamenu="96289">Política de cookies</a></li>
                    <li id="menu-item-96538" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96538"><a href="https://metricool.com/es/aviso-legal/" data-megamenu="96538">Aviso Legal</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        
  </footer>

</html>

<script>
    // Obtener el switch y el body
const themeToggle = document.getElementById('theme-toggle');
const body = document.body;

// Verificar el estado del modo al cargar la página
if (localStorage.getItem('theme') === 'dark') {
    body.classList.add('dark-mode');
    themeToggle.checked = true;  // Activar el switch
}

// Cambiar entre el modo oscuro y claro
themeToggle.addEventListener('change', () => {
    if (themeToggle.checked) {
        body.classList.add('dark-mode');
        localStorage.setItem('theme', 'dark');  // Guardar la preferencia en el almacenamiento local
    } else {
        body.classList.remove('dark-mode');
        localStorage.setItem('theme', 'light');  // Guardar la preferencia en el almacenamiento local
    }
});
</script>

