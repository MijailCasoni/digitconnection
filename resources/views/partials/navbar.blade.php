<nav class="bg-gradient-to-r from-indigo-700 via-purple-600 to-pink-500 dark:bg-gray-800 shadow-md py-4 px-6 md:py-6 md:px-8 md:flex md:justify-between md:items-center">
    <div class="flex items-center justify-between">
        <!-- Logo de la Empresa -->
        <a href="{{ route('home') }}" class="flex items-center text-white space-x-2">
            <!-- Asegúrate de reemplazar 'images/your-logo.png' con la ruta correcta de tu logo -->
            <img src="{{ asset('storage/images/logo1.png') }}" alt="Logo de la Empresa" class="h-20 w-auto">
            <span class="text-xl font-cairo text-white-900 dark:text-white ">DigitConnection</span>
        </a>
        <!-- Botón de Hamburguesa para Móviles (si lo necesitas, lo puedes añadir aquí) -->
        <button id="navbar-toggle" class="md:hidden text-gray-500 dark:text-gray-400 focus:outline-none focus:text-gray-700 dark:focus:text-gray-200">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Menú de Navegación, Switch de Dark Mode y Sección de Usuario/Login -->
    <div id="navbarNav" class="hidden w-full md:flex md:items-center md:justify-end md:space-x-6">
        <ul class="flex flex-col md:flex-row md:space-x-4">
            <li class="nav-item">
                <a class="block px-3 py-2  text-white dark:text-gray-200 rounded-md hover:bg-purple-300 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                   href="{{ route('home') }}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="block px-3 py-2 text-white dark:text-gray-200 rounded-md hover:bg-purple-300 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                   href="{{ route('blog.index') }}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="block px-3 py-2 text-white dark:text-gray-200 rounded-md hover:bg-purple-300 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                   href="{{ route('about') }}">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="block px-3 py-2 text-white dark:text-gray-200 rounded-md hover:bg-purple-300 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                   href="{{ route('servicios') }}">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="block px-3 py-2 text-white dark:text-gray-200 rounded-md hover:bg-purple-300 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                   href="{{ route('contacto') }}">Contacto</a>
            </li>
        </ul>

        <!-- Sección de Usuario/Login con Avatar -->
        <div class="flex items-center space-x-4 ml-auto md:ml-0">
            
                <!-- Avatar placeholder o icono de usuario -->
                <div class="w-9 h-9 rounded-full bg-gray-300 dark:bg-gray-600 flex items-center justify-center text-gray-600 dark:text-gray-300 text-sm font-semibold">
                    <!-- Puedes reemplazar esto con un icono SVG o una imagen de avatar real -->
                   <img src="{{ asset('/img/avat_1.png') }}" alt="Avatar de Usuario" class="w-9 h-9 rounded-full object-cover">
                </div>
    
            </a>
            <!-- Contenedor del Theme Switcher -->
            <div class="theme-switcher flex items-center justify-center space-x-2">
                <span class="text-gray-700 dark:text-gray-200">☀️</span>
                <label for="theme-toggle" class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" id="theme-toggle" class="sr-only peer">
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                </label>
                <span class="text-gray-700 dark:text-gray-200">🌙</span>
            </div>
            <ul class="flex space-x-4">
    <li><a href="{{ route('set-locale', 'es') }}" class="text-white hover:text-gray-300">ES</a></li>
    <li><a href="{{ route('set-locale', 'en') }}" class="text-white hover:text-gray-300">EN</a></li>
    <li><a href="{{ route('set-locale', 'pt') }}" class="text-white hover:text-gray-300">PT</a></li>
    <li><a href="{{ route('set-locale', 'it') }}" class="text-white hover:text-gray-300">IT</a></li>
</ul>
        </div>
    </div>
</nav>

