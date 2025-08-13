{{--
    Este parcial del footer ha sido refactorizado para usar EXCLUSIVAMENTE CLASES DE TAILWIND CSS
    y tus clases personalizadas definidas en `resources/css/footer.css`.
    Se eliminaron todas las clases de Bootstrap.
--}}
<footer class="footer-general text-sm w-full"> {{-- 'footer-general' de footer.css, 'w-full' de Tailwind --}}
    <div class="footer-fluid py-5"> {{-- 'footer-fluid' de footer.css (ahora incluye max-w, mx-auto, px-4 de Tailwind) --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left justify-items-center md:justify-items-start">
            {{-- Columna 1: Logo + descripción --}}
            <div class="w-full md:col-span-1 mb-4 px-4 flex flex-col items-center md:items-start text-center md:text-left">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/logo1.png') }}" alt="Logo Digit Connection" class="logo-footer mb-3">
                </a>
                <p class="text-footer-text-dark leading-relaxed"> {{-- 'text-footer-text-dark' de footer.css --}}
                    <strong>Digit-Connection</strong> crea soluciones digitales personalizadas para emprendedores, empresas y visionarios. Nos especializamos en sitios web, sistemas empresariales y branding digital.
                </p>
            </div>

            {{-- Columna 2: Empresa + Producto --}}
            <div class="w-full md:col-span-1 mb-4 px-4">
                <div class="flex flex-wrap gap-4 justify-around md:justify-start"> {{-- Tailwind para layout --}}
                    <div class="flex-1 min-w-[150px]"> {{-- Tailwind para columnas internas --}}
                        <p class="titulo text-footer-dark-blue">Empresa</p> {{-- 'titulo' y 'text-footer-dark-blue' de footer.css --}}
                        <ul class="ul-footer text-footer-text-dark"> {{-- 'ul-footer' de footer.css --}}
                            <li><a href="https://digitconnection.com/contacto/" class="nav-link">Contacto</a></li>
                            <li><a href="https://digitconnection.com/programa-de-afiliados/" class="nav-link">Programa de afiliados</a></li>
                            <li><a href="https://digitconnection.com/opiniones/" class="nav-link">Opiniones</a></li>
                            <li><a href="https://digitconnection.com/working" target="_blank" class="nav-link">Trabaja con nosotros</a></li>
                        </ul>
                    </div>
                    <div class="flex-1 min-w-[150px]"> {{-- Tailwind para columnas internas --}}
                        <p class="titulo text-footer-dark-blue">Producto</p>
                        <ul class="ul-footer text-footer-text-dark">
                            <li><a href="https://digitconnection.com/productos/" class="nav-link">Productos</a></li>
                            <li><a href="https://digitconnection.com/productos/hosting" class="nav-link">Servicios de alojamiento</a></li>
                            <li><a href="https://digitconnection.com/serviciosplus" class="nav-link">Nuestros servicios</a></li>
                            <li><a href="https://digitconnection.com/tecnologias" class="nav-link">Tecnologías aplicadas</a></li>
                            <li><a href="https://digitconnection.com/blog" class="nav-link">Novedades</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Columna 3: Contacto + redes sociales --}}
            <div class="w-full md:col-span-1 mb-4 px-4 text-center md:text-left">
                <p class="titulo text-footer-dark-blue">Contáctanos</p>
                <ul class="ul-footer text-footer-text-dark">
                    <li class="flex items-center justify-center md:justify-start"><i class="bi bi-envelope mr-2"></i> contacto@digitconnection.com</li>
                    <li class="flex items-center justify-center md:justify-start"><i class="bi bi-telephone mr-2"></i> +56 9 1234 5678</li>
                    <li class="flex items-center justify-center md:justify-start"><i class="bi bi-geo-alt mr-2"></i> Santiago, Chile</li>
                </ul>

                <p class="titulo mt-4 text-footer-dark-blue">Síguenos en redes</p>
                <div class="social-icons flex justify-center md:justify-start space-x-4 mt-4 text-2xl"> {{-- 'social-icons' de footer.css --}}
                    <a href="https://instagram.com/digitconnection" target="_blank" class="text-footer-text-dark hover:text-footer-dark-blue">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://facebook.com/digitconnection" target="_blank" class="text-footer-text-dark hover:text-footer-dark-blue">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://tiktok.com/@digitconnection" target="_blank" class="text-footer-text-dark hover:text-footer-dark-blue">
                        <i class="bi bi-tiktok"></i>
                    </a>
                    <a href="https://x.com/digitconnection" target="_blank" class="text-footer-text-dark hover:text-footer-dark-blue">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                </div>
            </div>
        </div>

        {{-- Subfooter legal --}}
        <div class="border-t border-gray-700/20 pt-3 mt-3 px-4 grid grid-cols-1 md:grid-cols-2 text-footer-text-dark text-sm items-center">
            <div class="text-center md:text-left">
                <p class="mb-0">Digit-Connection &copy; {{ date('Y') }} Todos los derechos reservados.</p>
            </div>
            <div class="text-center md:text-right">
                <nav>
                    <ul class="flex justify-center md:justify-end space-x-4"> {{-- Tailwind para flex y espaciado --}}
                        <li><a class="nav-link text-footer-text-dark hover:text-footer-dark-blue" href="https://metricool.com/es/terminos-legales/">Términos</a></li>
                        <li><a class="nav-l