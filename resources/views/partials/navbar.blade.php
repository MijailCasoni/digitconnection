{{--
    Este parcial ha sido refactorizado para usar CLASES DE TAILWIND CSS
    y tus estilos personalizados definidos en resources/css/navbar.css (importado en app.css).
    Las funcionalidades de colapsado y dropdown se gestionan con JavaScript simple,
    ya que no se utiliza Bootstrap JS.
--}}
<nav class="navbar w-full fixed top-0 left-0 z-50 py-3 shadow-md"> {{-- Tu clase 'navbar' de navbar.css --}}
    <div class="container mx-auto px-4 flex justify-between items-center">
        {{-- Logo --}}
        <a href="{{ route('home') }}">
            <img src="{{ asset('img/logo1.png') }}" class="navbar-logo h-12 w-auto" alt="Logo Digit Connection">
        </a>

        {{-- Botón para menú móvil (hamburguesa) --}}
        <button class="lg:hidden text-white focus:outline-none" type="button" id="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
        </button>

        {{-- Menú de navegación principal (oculto en móvil por defecto, visible en pantallas grandes) --}}
        <div class="hidden lg:flex flex-grow items-center justify-end" id="navbarNav">
            <ul class="flex items-center space-x-6 text-lg font-semibold"> {{-- Flex y espaciado de Tailwind --}}
                <li><a class="nav-link text-white hover:text-blue-200 transition duration-300 px-3 py-2 rounded-md" href="{{ route('home') }}">Inicio</a></li>
                <li><a class="nav-link text-white hover:text-blue-200 transition duration-300 px-3 py-2 rounded-md" href="{{ route('blog') }}">Blog</a></li>
                <li><a class="nav-link text-white hover:text-blue-200 transition duration-300 px-3 py-2 rounded-md" href="{{ route('about') }}">Nosotros</a></li>
                <li><a class="nav-link text-white hover:text-blue-200 transition duration-300 px-3 py-2 rounded-md" href="{{ route('servicios') }}">Servicios</a></li>
                <li><a class="nav-link text-white hover:text-blue-200 transition duration-300 px-3 py-2 rounded-md" href="{{ route('contacto') }}">Contacto</a></li>

                {{-- Contenedor para el switch del tema (Desktop) --}}
                <li class="theme-switcher flex items-center gap-2 ml-4"> {{-- Clases Tailwind para layout + tu clase CSS --}}
                    <span class="text-xl">☀️</span>
                    <input type="checkbox" id="theme-toggle" class="cursor-pointer">
                    <label for="theme-toggle" class="switch-label w-12 h-6 bg-gray-300 rounded-full relative cursor-pointer transition-colors duration-300 ease-in-out"></label>
                    <span class="text-xl">🌙</span>
                </li>

                {{-- Menú de usuario/autenticación --}}
                @auth
                    <li class="relative">
                        <button id="user-dropdown-button" class="flex items-center text-white focus:outline-none hover:text-blue-200 transition duration-300 ml-4">
                            <img src="{{ asset('img/avat_1.png') }}" alt="User Icon" class="img_icon h-8 w-8 rounded-full border-2 border-white">
                            <i class="fas fa-chevron-down ml-2 text-sm"></i>
                        </button>
                        <div id="user-dropdown-menu" class="absolute right-0 mt-2 w-48 bg-indigo-900 rounded-md shadow-lg py-1 z-20 hidden">
                            <a class="block px-4 py-2 text-white hover:bg-indigo-800 transition duration-300" href="{{ route('dashboard.posts.index') }}">
                                <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-red-300 hover:bg-indigo-800 transition duration-300">
                                    <i class="fas fa-sign-out-alt mr-2"></i> Salir
                                </button>
                            </form>
                        </div>
                    </li>
                @else
                    <li class="ml-4">
                        <a class="nav-link text-white hover:text-blue-200 transition duration-300 px-3 py-2 rounded-md" href="{{ route('login') }}">Iniciar Sesión</a>
                    </li>
                    <li>
                        <a class="nav-link text-white hover:text-blue-200 transition duration-300 px-3 py-2 rounded-md" href="{{ route('register') }}">Registrarse</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>

    {{-- Menú colapsable para móvil (oculto por defecto, se muestra con JS) --}}
    <div class="lg:hidden navbar-collapse hidden bg-gray-800 w-full py-4" id="navbar-mobile-menu">
        <ul class="flex flex-col items-center space-y-3 text-lg font-medium">
            <li><a class="nav-link text-white hover:text-blue-200 block px-4 py-2 w-full text-center" href="{{ route('home') }}">Inicio</a></li>
            <li><a class="nav-link text-white hover:text-blue-200 block px-4 py-2 w-full text-center" href="{{ route('blog') }}">Blog</a></li>
            <li><a class="nav-link text-white hover:text-blue-200 block px-4 py-2 w-full text-center" href="{{ route('about') }}">Nosotros</a></li>
            <li><a class="nav-link text-white hover:text-blue-200 block px-4 py-2 w-full text-center" href="{{ route('servicios') }}">Servicios</a></li>
            <li><a class="nav-link text-white hover:text-blue-200 block px-4 py-2 w-full text-center" href="{{ route('contacto') }}">Contacto</a></li>
            {{-- Switch del tema en móvil --}}
            <li class="theme-switcher flex items-center gap-2 mt-4">
                <span class="text-xl">☀️</span>
                <input type="checkbox" id="theme-toggle-mobile" class="cursor-pointer">
                <label for="theme-toggle-mobile" class="switch-label w-12 h-6 bg-gray-300 rounded-full relative cursor-pointer transition-colors duration-300 ease-in-out"></label>
                <span class="text-xl">🌙</span>
            </li>
            @auth
                <li>
                    <a class="nav-link text-green-300 font-bold hover:text-green-200 block px-4 py-2 w-full text-center" href="{{ route('dashboard.posts.index') }}">
                        <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link text-red-300 hover:text-red-200 bg-transparent border-none cursor-pointer block px-4 py-2 w-full text-center">
                            <i class="fas fa-sign-out-alt mr-2"></i> Salir
                        </button>
                    </form>
                </li>
            @else
                <li>
                    <a class="nav-link text-white hover:text-blue-200 block px-4 py-2 w-full text-center" href="{{ route('login') }}">Iniciar Sesión</a>
                </li>
                <li>
                    <a class="nav-link text-white hover:text-blue-200 block px-4 py-2 w-full text-center" href="{{ route('register') }}">Registrarse</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>

{{-- Script para el toggle de la navbar y dropdown de usuario --}}
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle del menú móvil (hamburguesa)
        const navbarToggler = document.getElementById('navbar-toggler');
        const navbarMobileMenu = document.getElementById('navbar-mobile-menu');

        if (navbarToggler && navbarMobileMenu) {
            navbarToggler.addEventListener('click', function() {
                navbarMobileMenu.classList.toggle('hidden'); // Alterna la visibilidad
                navbarMobileMenu.classList.toggle('flex');    // Alterna a flex para mostrar
            });
        }

        // Toggle del dropdown de usuario
        const userDropdownButton = document.getElementById('user-dropdown-button');
        const userDropdownMenu = document.getElementById('user-dropdown-menu');

        if (userDropdownButton && userDropdownMenu) {
            userDropdownButton.addEventListener('click', function(event) {
                event.stopPropagation(); // Evita que el clic se propague al documento
                userDropdownMenu.classList.toggle('hidden');
                userDropdownMenu.classList.toggle('block'); // Alterna a block para mostrar
            });

            // Cerrar el dropdown si se hace clic fuera de él
            document.addEventListener('click', function(event) {
                if (userDropdownMenu && !userDropdownButton.contains(event.target) && !userDropdownMenu.contains(event.target)) {
                    userDropdownMenu.classList.add('hidden');
                    userDropdownMenu.classList.remove('block');
                }
            });
        }

        // Script para los toggles de tema (versión desktop y móvil)
        const setupThemeToggle = (toggleId) => {
            const themeToggle = document.getElementById(toggleId);
            const body = document.body; // El body es global y se puede acceder aquí

            if (themeToggle) {
                // Verificar el estado del modo al cargar la página
                if (localStorage.getItem('theme') === 'dark') {
                    body.classList.add('dark-mode');
                    themeToggle.checked = true;
                }

                // Cambiar entre el modo oscuro y claro
                themeToggle.addEventListener('change', () => {
                    if (themeToggle.checked) {
                        body.classList.add('dark-mode');
                        localStorage.setItem('theme', 'dark');
                    } else {
                        body.classList.remove('dark-mode');
                        localStorage.setItem('theme', 'light');
                    }
                });
            }
        };

        // Inicializar los toggles de tema
        setupThemeToggle('theme-toggle');        // Para el toggle en desktop
        setupThemeToggle('theme-toggle-mobile'); // Para el toggle en móvil
    });
</script>
@endpush
