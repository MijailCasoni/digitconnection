{{-- FORMULARIO --}}
<div class="md:col-span-1">



    <div class="relative bg-gradient-to-br from-blue-50 via-white to-blue-100">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/backform.png') }}" alt="Decoración" class="w-full h-[1000px] object-cover opacity-70 mix-blend-multiply" />
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            {{-- Aquí va el formulario --}}
            <form action="{{ route('contact.submit') }}" method="POST" class="bg-white/20 backdrop-blur-md shadow-xl rounded-xl p-8 space-y-6">
                @csrf

                {{-- Encabezado emocional --}}
                <div class="text-center">
                    <h2 class="text-4xl font-extrabold text-gradient-blue-main mb-2">¿Listo para transformar tu visión?</h2>
                    <p class="text-gray-700 text-lg leading-relaxed">Déjanos tus datos y te ayudaremos a convertir tus ideas en soluciones digitales de alto impacto.</p>
                </div>

                {{-- Campos esenciales --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="name-bsn" class="block text-sm font-medium text-gray-700">Tu nombre</label>
                        <input type="text" name="name-bsn" id="name-bsn" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gradient-blue-main focus:border-gradient-blue-main"
                            value="{{ old('name-bsn') }}">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                        <input type="email" name="email" id="email" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gradient-blue-main focus:border-gradient-blue-main"
                            value="{{ old('email') }}">
                    </div>
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Número de contacto (WhatsApp)</label>
                    <input type="tel" name="phone" id="phone" required
                        placeholder="+56 9 1234 5678"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gradient-blue-main focus:border-gradient-blue-main"
                        value="{{ old('phone') }}">
                </div>

                <div>
                    <label for="relationship" class="block text-sm font-medium text-gray-700">Tu rol en la empresa</label>
                    <select name="relationship" id="relationship" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gradient-blue-main focus:border-gradient-blue-main">
                        <option value="" disabled selected>Selecciona una opción</option>
                        <option value="Dueño" {{ old('relationship') == 'Dueño' ? 'selected' : '' }}>Dueño</option>
                        <option value="Administrador" {{ old('relationship') == 'Administrador' ? 'selected' : '' }}>Administrador</option>
                        <option value="Equipo TI" {{ old('relationship') == 'Equipo TI' ? 'selected' : '' }}>Equipo TI</option>
                    </select>
                </div>

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nombre de tu empresa</label>
                    <input type="text" name="name" id="name" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gradient-blue-main focus:border-gradient-blue-main"
                        value="{{ old('name') }}">
                </div>

                <div>
                    <label for="domain" class="block text-sm font-medium text-gray-700">¿Ya tienes página web?</label>
                    <input type="text" name="domain" id="domain"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gradient-blue-main focus:border-gradient-blue-main"
                        value="{{ old('domain') }}">
                </div>

                <div>
                    <label for="site_type" class="block text-sm font-medium text-gray-700">¿Qué tipo de sitio necesitas?</label>
                    <select name="site_type" id="site_type" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gradient-blue-main focus:border-gradient-blue-main">
                        <option value="" disabled selected>Selecciona una opción</option>
                        <option value="landingpage">Landing Page</option>
                        <option value="Blog">Blog</option>
                        <option value="E-commerce">E-commerce</option>
                        <option value="Informativo">Informativo</option>
                        <option value="Sistema dedicado/Sistema Web">Sistema dedicado / Sistema Web</option>
                    </select>
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">¿Qué necesitas lograr?</label>
                    <textarea name="message" id="message" rows="4" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gradient-blue-main focus:border-gradient-blue-main">{{ old('message') }}</textarea>
                </div>

                {{-- CTA --}}
                <button type="submit"
                    class="w-full bg-blue-600 text-white font-bold py-3 px-6 rounded-full shadow hover:bg-blue-700 hover:scale-105 transition-transform duration-300">
                    Quiero avanzar
                </button>

                {{-- Redes sociales --}}
                <div class="text-center pt-6">
                    <p class="text-gray-600 mb-4">También puedes encontrarnos en nuestras redes sociales:</p>
                    <div class="flex justify-center space-x-4 text-2xl">
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" class="text-pink-600 hover:text-pink-800"><i class="fab fa-instagram-square"></i></a>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>