<footer class="footer-general text-sm w-100">
    <div class="container-fluid py-5">
        <div class="row text-start justify-content-center">

            {{-- COLUMNA 1: Logo + descripción --}}
            <div class="col-12 col-md-4 mb-4 px-4">
                <img src="{{ asset('img/logo1.png') }}" alt="Logo Digit Connection" class="logo-footer mb-3">
                <p><strong>Digit-Connection</strong> crea soluciones digitales personalizadas para emprendedores, empresas y visionarios. Nos especializamos en sitios web, sistemas empresariales y branding digital.</p>
            </div>

            {{-- COLUMNA 2: Empresa + Producto --}}
            <div class="col-12 col-md-4 mb-4 px-4">
                <div class="d-flex flex-wrap gap-4">
                    <div class="footer-column">
                        <p class="titulo">Empresa</p>
                        <ul class="ul-footer">
                            <li><a href="https://digitconnection.com/contacto/">Contacto</a></li>
                            <li><a href="https://digitconnection.com/programa-de-afiliados/">Programa de afiliados</a></li>
                            <li><a href="https://digitconnection.com/opiniones/">Opiniones</a></li>
                            <li><a href="https://digitconnection.com/working" target="_blank">Trabaja con nosotros</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <p class="titulo">Producto</p>
                        <ul class="ul-footer">
                            <li><a href="https://digitconnection.com/productos/">Productos</a></li>
                            <li><a href="https://digitconnection.com/productos/hosting">Servicios de alojamiento</a></li>
                            <li><a href="https://digitconnection.com/serviciosplus">Nuestros servicios</a></li>
                            <li><a href="https://digitconnection.com/tecnologias">Tecnologías aplicadas</a></li>
                            <li><a href="https://digitconnection.com/blog">Novedades</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- COLUMNA 3: Contacto + redes sociales --}}
            <div class="col-12 col-md-4 mb-4 px-4">
                <p class="titulo">Contáctanos</p>
                <ul class="ul-footer">
                    <li><i class="bi bi-envelope"></i> contacto@digitconnection.com</li>
                    <li><i class="bi bi-telephone"></i> +56 9 1234 5678</li>
                    <li><i class="bi bi-geo-alt"></i> Santiago, Chile</li>
                </ul>

                <p class="titulo mt-4">Síguenos en redes</p>
                <div class="social-icons">
                    <a href="https://instagram.com/digitconnection" target="_blank" class="me-3 text-dark">
                        <i class="bi bi-instagram fs-4"></i>
                    </a>
                    <a href="https://facebook.com/digitconnection" target="_blank" class="me-3 text-dark">
                        <i class="bi bi-facebook fs-4"></i>
                    </a>
                    <a href="https://tiktok.com/@digitconnection" target="_blank" class="me-3 text-dark">
                        <i class="bi bi-tiktok fs-4"></i>
                    </a>
                    <a href="https://x.com/digitconnection" target="_blank" class="me-3 text-dark">
                        <i class="bi bi-twitter-x fs-4"></i>
                    </a>
                </div>
            </div>
        </div>

        {{-- Subfooter legal --}}
        <div class="row border-top pt-3 mt-3 px-4">
            <div class="col-12 col-md-6 text-start">
                <p class="mb-0">Digit-Connection &copy; {{ date('Y') }} Todos los derechos reservados.</p>
            </div>
            <div class="col-12 col-md-6 text-end">
                <nav>
                    <ul class="nav justify-content-end">
                        <li class="nav-item"><a class="nav-link" href="https://metricool.com/es/terminos-legales/">Términos</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://metricool.com/es/politica-privacidad/">Privacidad</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://metricool.com/es/politica-de-cookies/">Cookies</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://metricool.com/es/aviso-legal/">Legal</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>