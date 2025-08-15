<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DigitConnection') }}</title>

    <!-- Fonts - ¡Importante para las fuentes de Tailwind (Inter)! -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
    {{-- Comenta o elimina si NO usas Nunito: <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Scripts - ¡CRUCIAL! Asegúrate de que apunte a resources/css/app.css para Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-inter antialiased bg-gray-100 dark:bg-gray-900">
    <div id="app">
        <!-- Aquí se incluye tu navbar. Asegúrate de que partials.navbar sea el que usa CLASES TAILWIND. -->
        @include('partials.navbar') <!--Asume que tu navbar está en resources/views/partials/navbar.blade.php-->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('partials.footer')

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
    </script>
    @stack('scripts') {{-- Para scripts específicos de cada vista --}}
</body>
</html>
