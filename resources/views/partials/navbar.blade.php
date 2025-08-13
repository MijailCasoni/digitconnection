<div class="font-inter">
    <!-- El `collapse navbar-collapse` se maneja con un toggle y clases responsivas -->
    <!-- Por defecto, en pantallas pequeñas se ocultaría el menú y se mostraría con un botón de hamburguesa -->
    <!-- En pantallas medianas y grandes (md:), el menú se muestra como una fila flexible -->
    <div id="navbarNav" class="hidden w-full md:block">
        <ul class="flex flex-col md:flex-row md:space-x-4">
            <li class="nav-item">
                <a class="block px-3 py-2 text-gray-700 rounded-md hover:bg-gray-200 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500"
                   href="{{ route('home') }}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="block px-3 py-2 text-gray-700 rounded-md hover:bg-gray-200 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500"
                   href="{{ route('blog') }}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="block px-3 py-2 text-gray-700 rounded-md hover:bg-gray-200 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500"
                   href="{{ route('about') }}">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="block px-3 py-2 text-gray-700 rounded-md hover:bg-gray-200 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500"
                   href="{{ route('servicios') }}">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="block px-3 py-2 text-gray-700 rounded-md hover:bg-gray-200 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500"
                   href="{{ route('contacto') }}">Contacto</a>
            </li>
        </ul>

        <!-- Contenedor del Theme Switcher -->
        <div class="theme-switcher mt-4 md:mt-0 flex justify-end items-center">
            <input type="checkbox" id="theme-toggle" class="sr-only" />
            <label for="theme-toggle" class="switch-label text-2xl">🌙</label>
        </div>
    </div>
</div>