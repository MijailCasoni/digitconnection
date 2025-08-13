<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- SEO Básico --}}
    <title>@yield('title', 'DigitConnection')</title>
    <meta name="description" content="Digit-Connection crea soluciones digitales personalizadas: sitios web, sistemas empresariales y branding para emprendedores y empresas.">
    <meta name="keywords" content="DigitConnection, desarrollo web, Laravel, sistemas empresariales, diseño web, branding, hosting, dominio">
    <meta name="author" content="Digit-Connection">
    <meta name="robots" content="index, follow">

    {{-- Open Graph (para compartir en redes) --}}
    <meta property="og:title" content="Digit-Connection | Soluciones digitales personalizadas">
    <meta property="og:description" content="Creamos sitios web, sistemas empresariales y experiencias digitales que conectan marcas con personas.">
    <meta property="og:image" content="{{ asset('img/banner1.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Digit-Connection">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Digit-Connection | Soluciones digitales personalizadas">
    <meta name="twitter:description" content="Creamos sitios web, sistemas empresariales y experiencias digitales que conectan marcas con personas.">
    <meta name="twitter:image" content="{{ asset('img/banner1.jpg') }}">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">
    <!-- Google Fonts: Inter (asegúrate de que Sinfony también esté cargada aquí o en app.css) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    {{-- Si 'Sinfony' es de Google Fonts, descomenta y añade aquí: --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Sinfony&display=swap" rel="stylesheet"> --}}


    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Bootstrap Icons (muchos íconos son útiles independientemente del framework CSS) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    {{-- App Styles / Scripts (Vite para desarrollo, fallback para producción) --}}
    {{-- ¡Este es el ÚNICO archivo CSS que necesitas enlazar directamente! --}}
    {{-- Contendrá Tailwind y todos tus @import de recursos/css/ --}}
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endif


    @stack('styles')
</head>

{{-- Clases de Tailwind en el body, usando el color de fondo personalizado --}}
<body class="font-sans bg-light-bg antialiased @yield('body-class')">
    {{-- Contenedor principal para el modo oscuro y el layout flexbox --}}
    <div class="text-black/50 dark:text-white/50 min-h-screen flex flex-col">

        <header>
            <!-- Navbar -->
            {{-- Aseguramos que la navbar sea fija, y la colocamos dentro de un div con auto margins para centrarla --}}
            <div class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 fixed top-0 z-50">
                @include('partials.navbar')
            </div>
            {{-- Espacio para compensar la navbar fija --}}
            <div class="pt-16"></div> {{-- Ajusta este padding-top según la altura real de tu navbar --}}
        </header>

        <!-- Content -->
        <main class="flex-grow"> {{-- flex-grow para que el contenido ocupe el espacio disponible --}}
            @if (session('success'))
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer" onclick="this.parentElement.remove()">
                            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Cerrar</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.196l-2.651 2.652a1.2 1.2 0 1 1-1.697-1.697l2.651-2.651-2.651-2.651a1.2 1.2 0 0 1 1.697-1.697l2.651 2.651 2.651-2.651a1.2 1.2 0 0 1 1.697 1.697l-2.651 2.651 2.651 2.651z"/></svg>
                        </span>
                    </div>
                </div>
            @endif

            @if ($errors->any())
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer" onclick="this.parentElement.remove()">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Cerrar</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.196l-2.651 2.652a1.2 1.2 0 1 1-1.697-1.697l2.651-2.651-2.651-2.651a1.2 1.2 0 0 1 1.697-1.697l2.651 2.651 2.651-2.651a1.2 1.2 0 0 1 1.697 1.697l-2.651 2.651 2.651 2.651z"/></svg>
                        </span>
                    </div>
                </div>
            @endif

            @yield('content')
        </main>

        <footer class="py-16 text-center text-sm text-black dark:text-white/70">
            @include('partials.footer')
        </footer>

        <!-- WhatsApp Floating Button -->
        <a href="https://wa.me/56932691146?text=Hola%20me%20interesa%20saber%20mas%20sobre%20un%20producto¡¡" id="whatsapp-icon" class="whatsapp-button fixed bottom-12 right-5 z-50 bg-whatsapp-green text-white rounded-full w-16 h-16 flex items-center justify-center shadow-whatsapp-custom hover:scale-110 transition-transform duration-300 ease-in-out" target="_blank">
            <i class="bi bi-whatsapp text-3xl"></i>
        </a>
    </div>

    {{-- Tus scripts personalizados aquí o en app.js --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Obtener el switch y el body
            const themeToggle = document.getElementById('theme-toggle');
            const body = document.body;

            // Verificar el estado del modo al cargar la página y aplicar si existe themeToggle
            if (themeToggle && localStorage.getItem('theme') === 'dark') {
                body.classList.add('dark-mode');
                themeToggle.checked = true; // Activar el switch
            }

            // Cambiar entre el modo oscuro y claro
            if (themeToggle) { // Ensure themeToggle exists before adding listener
                themeToggle.addEventListener('change', () => {
                    if (themeToggle.checked) {
                        body.classList.add('dark-mode');
                        localStorage.setItem('theme', 'dark'); // Guardar la preferencia en el almacenamiento local
                    } else {
                        body.classList.remove('dark-mode');
                        localStorage.setItem('theme', 'light'); // Guardar la preferencia en el almacenamiento local
                    }
                });
            }

            // WhatsApp icon click
            const whatsappButton = document.getElementById('whatsapp-icon'); // Get the element by its ID
            if (whatsappButton) { // Check if the element exists
                whatsappButton.addEventListener('click', () => {
                    fetch('/api/track-whatsapp-interaction', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            event_type: 'click',
                            phone_number: '56950148342'
                        })
                    });
                });
            }

            // Script para cerrar alertas (usando onclick directo en el span, también funciona)
            // Ya no es necesario el querySelectorAll si usas onclick directamente.
            // Para mantener la consistencia con JS, podrías hacer esto:
            document.querySelectorAll('[role="alert"] .cursor-pointer').forEach(closeButton => {
                closeButton.addEventListener('click', function() {
                    this.closest('[role="alert"]').remove();
                });
            });
        });
    </script>

    @stack('scripts') {{-- Para scripts específicos de cada vista --}}
</body>
</html>
