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

    {{-- Bootstrap CSS --}}
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    {{-- Optional JS --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    {{-- App Styles / Scripts --}}
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endif

    {{-- Custom Styles --}}
    <link href="{{ asset('css/inicio.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cards.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/intro.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ventajas.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hosting.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plantillas.css') }}" rel="stylesheet">
    <link href="{{ asset('css/servicios.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body class="font-sans bg-[#d5e9fd] antialiased @yield('body-class')">
    <div class="bg-[#d5e9fd] text-black/50 dark:text-white/50">

        <header>
            <!-- Navbar -->
            <div class="relative w-full max-w-5xl px-3 py-6lg:max-w-9xl fixed-top">
                @include('partials.navbar')
            </div>

        </header>
        <!-- Content -->
        @yield('content')

    </div>
    </div>

    </div>


    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
        @include('partials.footer')
    </footer>
    <a href="https://wa.me/56932691146?text=Hola%20me%20interesa%20saber%20mas%20sobre%20un%20producto¡¡" class="whatsapp-button" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>
</body>



</html>

<script>
    // Obtener el switch y el body
    const themeToggle = document.getElementById('theme-toggle');
    const body = document.body;

    // Verificar el estado del modo al cargar la página
    if (localStorage.getItem('theme') === 'dark') {
        body.classList.add('dark-mode');
        themeToggle.checked = true; // Activar el switch
    }

    // Cambiar entre el modo oscuro y claro
    themeToggle.addEventListener('change', () => {
        if (themeToggle.checked) {
            body.classList.add('dark-mode');
            localStorage.setItem('theme', 'dark'); // Guardar la preferencia en el almacenamiento local
        } else {
            body.classList.remove('dark-mode');
            localStorage.setItem('theme', 'light'); // Guardar la preferencia en el almacenamiento local
        }
    });

    // WhatsApp icon click
    document.getElementById('whatsapp-icon')?.addEventListener('click', () => {
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
</script>