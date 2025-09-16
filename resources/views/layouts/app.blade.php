<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DigitConnection') }}</title>
    <meta name="description" content="@yield('meta-description', config('app.name', 'DigitConnection') . ' - Conexión Digital para tu Negocio, Digital conection for you bussines. Diseño Web, web designe, SEO, Marketing Digital y más. digital Marketing and more')">

    <meta name="keywords" content="@yield('meta-keywords', 'diseño web, desarrollo web, seo, marketing digital, blogs, tecnología, digitconnection, Digital conection for you bussines, web designe, digital Marketing and more. ')">

    <link rel="canonical" href="@yield('canonical', url()->current())" />

    <meta property="og:title" content="@yield('og-title', config('app.name', 'DigitConnection'))" />
    <meta property="og:description" content="@yield('meta-description', config('app.name', 'DigitConnection') . ' - Conexión Digital para tu Negocio. Diseño Web, SEO, Marketing Digital y más, Digital Conection from you bussines, Digital Marketing and more')">
    <meta property="og:url" content="@yield('og-url', url()->current())" />
    <meta property="og:type" content="@yield('og-type', 'website')" />
    <meta property="og:image" content="@yield('og-image', asset('storage/images/logo1.png'))" />
    <!-- Fonts - ¡Importante para las fuentes de Tailwind (Inter)! -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    
    <!-- Scripts - ¡CRUCIAL! Asegúrate de que apunte a resources/css/app.css para Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-inter antialiased bg-gray-100 dark:bg-gray-900">
    <div id="app">
        <!-- Aquí se incluye tu navbar. Asegúrate de que partials.navbar sea el que usa CLASES TAILWIND. -->
        @include('partials.navbar') <!--Asume que tu navbar está en resources/views/partials/navbar.blade.php-->

        <main class="">
            @yield('content')
        </main>
    </div>
    @include('partials.footer')
    @include('partials.wpfloat') <!-- Botón flotante de WhatsApp -->

    <!-- SCRIPTS JAVASCRIPT: Coloca los scripts globales aquí, como el de dark mode si no está en app.js --}}-->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const themeToggle = document.getElementById('theme-toggle');
            const htmlElement = document.documentElement;

            if (themeToggle) {
                const currentTheme = localStorage.getItem('theme');
                if (currentTheme) {
                    htmlElement.classList.add(currentTheme);
                    if (currentTheme === 'dark') {
                        themeToggle.checked = true;
                    }
                } else if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    htmlElement.classList.add('dark');
                    themeToggle.checked = true;
                }

                themeToggle.addEventListener('change', () => {
                    if (themeToggle.checked) {
                        htmlElement.classList.add('dark');
                        localStorage.setItem('theme', 'dark');
                    } else {
                        htmlElement.classList.remove('dark');
                        localStorage.setItem('theme', 'light');
                    }
                });
            } else {
                console.error("Error: El elemento 'theme-toggle' no fue encontrado en el DOM de app.blade.php.");
            }
        });

        
document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('navbar-toggle');
    const navMenu   = document.getElementById('navbarNav');

    toggleBtn.addEventListener('click', () => {
        navMenu.classList.toggle('hidden');
    });
});

    </script>
    @stack('scripts') {{-- Para scripts específicos de cada vista --}}
</body>
</html>
