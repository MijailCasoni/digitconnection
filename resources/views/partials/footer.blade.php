<footer class="footer-general text-sm w-full bg-indigo-600"> {{-- 'footer-general' de footer.css, 'w-full' de Tailwind --}}
    <div class="footer-fluid py-5"> {{-- 'footer-fluid' de footer.css (ahora incluye max-w, mx-auto, px-4 de Tailwind) --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left justify-items-center md:justify-items-start">
            {{-- Columna 1: Logo + descripción --}}
            <div class="w-full md:col-span-1 mb-4 px-4 flex flex-col items-center md:items-start text-center md:text-left">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('storage/images/logo1.png') }}" alt="Logo Digit Connection" class="logo-footer mb-3 w-40 h-40">
                </a>
            </div>

            {{-- Columna 2: Empresa + Producto --}}
            <div class="w-full md:col-span-1 mb-4 px-4">
                <div class="flex flex-wrap gap-4 justify-around md:justify-start"> {{-- Tailwind para layout --}}
                    <div class="flex-1 min-w-[150px]"> {{-- Tailwind para columnas internas --}}
                        <p class="text-md text-white">{{ __('messages.company') }}</p>
                        <ul class="ul-footer text-black">
                            <li><a href="{{ route('contacto') }}" class="nav-link">{{ __('messages.contact') }}</a></li>
                            <li><a href="{{ route('afiliados') }}" class="nav-link">{{ __('messages.affiliates') }}</a></li>
                            <li><a href="#" class="nav-link">{{ __('messages.opinions') }}</a></li>
                            <li><a href="{{ route('trabaja.con.nosotros') }}" class="nav-link">{{ __('messages.work_with_us') }}</a></li>
                        </ul>
                    </div>
                    <div class="flex-1 min-w-[150px]"> {{-- Tailwind para columnas internas --}}
                        <p class="text-md text-white">{{ __('messages.product') }}</p>
                        <ul class="ul-footer text-black">
                            <li><a href="{{ route('servicios') }}" class="nav-link">{{ __('messages.products_and_services') }}</a></li>
                            <li><a href="{{ route('tecnologias') }}" class="nav-link">{{ __('messages.applied_technologies') }}</a></li>
                            <li><a href="{{ route('servicios') }}" class="nav-link">{{ __('messages.hosting_services') }}</a></li>
                            <li><a href="{{ route('blog.index') }}" class="nav-link">{{ __('messages.news') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Columna 3: Contacto + redes sociales --}}
            <div class="w-full md:col-span-1 mb-4 px-4 text-center md:text-left">
                <p class="text-md text-white">{{ __('messages.contact_us') }}</p>
                <ul class="ul-footer text-black">
                    <li class="flex items-center justify-center md:justify-start"><i class="bi bi-envelope mr-2"></i> contacto@digitconnection.com</li>
                    <li class="flex items-center justify-center md:justify-start"><i class="bi bi-telephone mr-2"></i> +56 9 32691146</li>
                    <li class="flex items-center justify-center md:justify-start"><i class="bi bi-geo-alt mr-2"></i> Santiago, Chile</li>
                </ul>

                <p class="titulo mt-4 text-white">{{ __('messages.follow_us') }}</p>
                <div class="social-icons flex justify-center md:justify-start space-x-4 mt-4 text-2xl">
                    <a href="https://instagram.com/digit.connection" target="_blank" class="text-footer-text-dark hover:text-footer-white">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>
        </div>

        {{-- Subfooter legal --}}
        <div class="border-t border-gray-700/20 pt-3 mt-3 px-4 grid grid-cols-1 md:grid-cols-2 text-footer-text-dark text-sm items-center">
            <div class="text-center md:text-left">
                <p class="mb-0">DigitConnection &copy; {{ date('Y') }} {{ __('messages.all_rights_reserved') }}</p>
            </div>
            <div class="text-center md:text-right">
                <nav>
                    <ul class="flex justify-center md:justify-end space-x-4">
                        <li><a class="nav-link text-footer-text-dark hover:text-footer-dark-blue" href="{{ route('terminos.servicio') }}">{{ __('messages.terms') }}</a></li>
                        <li><a class="nav-link text-footer-text-dark hover:text-footer-dark-blue" href="{{ route('politica.privacidad') }}">{{ __('messages.privacy_policy') }}</a></li>
                        <li><a class="nav-link text-footer-text-dark hover:text-footer-dark-blue" href="{{ route('cookies') }}">{{ __('messages.cookies') }}</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>