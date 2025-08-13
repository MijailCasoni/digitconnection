<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8"> {{-- Contenedor principal para el formulario y la imagen --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8 mt-12 items-start"> {{-- Cuadrícula de 2 columnas para MD y arriba, 1 columna en móvil --}}
        <!-- Columna del formulario (Izquierda) -->
        <div class="md:col-span-1 flex flex-col items-center justify-center p-4">
            <form action="{{ route('contact.submit') }}" method="POST" class="w-full max-w-lg px-5 mt-6 bg-white shadow-lg rounded-lg p-8">
                <h2 class="text-center text-4xl font-bold text-gradient-blue-main mb-4">Contacto</h2>
                <p class="text-center text-lg leading-relaxed text-gray-700 mb-8">
                    ¿Listo para llevar tu proyecto al siguiente nivel? Contáctanos y hablemos sobre tus necesidades.
                </p>
                @csrf
                <div class="mb-4">
                    <label for="name-bsn" class="block text-gray-700 text-sm font-bold mb-2">Nombre de la empresa:</label>
                    <input type="text" name="name-bsn" id="name-bsn" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-gradient-blue-main focus:border-transparent @error('name-bsn') border-red-500 @enderror" value="{{ old('name-bsn') }}" required>
                    @error('name-bsn')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="relationship" class="block text-gray-700 text-sm font-bold mb-2">Relación con la Empresa:</label>
                    <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:ring-2 focus:ring-gradient-blue-main focus:border-transparent @error('relationship') border-red-500 @enderror" id="relationship" name="relationship" required>
                        <option value="" selected disabled>Seleccione una opción</option>
                        <option value="Dueño" {{ old('relationship') == 'Dueño' ? 'selected' : '' }}>Dueño</option>
                        <option value="Administrador" {{ old('relationship') == 'Administrador' ? 'selected' : '' }}>Administrador</option>
                        <option value="Equipo TI" {{ old('relationship') == 'Equipo TI' ? 'selected' : '' }}>Equipo TI</option>
                    </select>
                    @error('relationship')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-gradient-blue-main focus:border-transparent @error('name') border-red-500 @enderror" value="{{ old('name') }}" required>
                    @error('name')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo Electrónico:</label>
                    <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-gradient-blue-main focus:border-transparent @error('email') border-red-500 @enderror" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="city" class="block text-gray-700 text-sm font-bold mb-2">Ciudad de Contacto:</label>
                    <input type="text" name="city" id="city" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-gradient-blue-main focus:border-transparent @error('city') border-red-500 @enderror" value="{{ old('city') }}" required>
                    @error('city')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="has_domain" class="block text-gray-700 text-sm font-bold mb-2">¿Cuentas con dominio?</label>
                    <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:ring-2 focus:ring-gradient-blue-main focus:border-transparent @error('has_domain') border-red-500 @enderror" id="has_domain" name="has_domain" required>
                        <option value="" selected disabled>Seleccione una opción</option>
                        <option value="Si" {{ old('has_domain') == 'Si' ? 'selected' : '' }}>Sí</option>
                        <option value="No" {{ old('has_domain') == 'No' ? 'selected' : '' }}>No</option>
                    </select>
                    @error('has_domain')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="domain" class="block text-gray-700 text-sm font-bold mb-2">¿Ya cuentas con uno? Cuéntanos cuál es:</label>
                    <input type="text" name="domain" id="domain" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-gradient-blue-main focus:border-transparent @error('domain') border-red-500 @enderror" value="{{ old('domain') }}" required>
                    @error('domain')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="site_type" class="block text-gray-700 text-sm font-bold mb-2">¿Qué tipo de sitio necesitas?</label>
                    <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:ring-2 focus:ring-gradient-blue-main focus:border-transparent @error('site_type') border-red-500 @enderror" id="site_type" name="site_type" required>
                        <option value="" selected disabled>Seleccione una opción</option>
                        <option value="landingpage" {{ old('site_type') == 'landingpage' ? 'selected' : '' }}>Landing Page</option>
                        <option value="Blog" {{ old('site_type') == 'Blog' ? 'selected' : '' }}>Blog</option>
                        <option value="E-commerce" {{ old('site_type') == 'E-commerce' ? 'selected' : '' }}>E-commerce</option>
                        <option value="Informativo" {{ old('site_type') == 'Informativo' ? 'selected' : '' }}>Informativo</option>
                        <option value="Sistema dedicado/Sistema Web" {{ old('site_type') == 'Sistema dedicado/Sistema Web' ? 'selected' : '' }}>Sistema dedicado/Sistema Web</option>
                    </select>
                    @error('site_type')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Mensaje:</label>
                    <textarea name="message" id="message" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-gradient-blue-main focus:border-transparent @error('message') border-red-500 @enderror" rows="5" required>{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="inline-flex items-center justify-center bg-blue-600 text-white font-bold py-3 px-8 rounded-full shadow-md hover:bg-blue-700 hover:scale-105 transition-all duration-300 ease-in-out w-full mt-6">Enviar</button>
                <div class="text-center mt-8">
                    <p class="text-gray-600 mb-4">También puedes encontrarnos en nuestras redes sociales.</p>
                    <div class="flex justify-center space-x-4 text-3xl">
                        <a href="#" class="text-form-primary hover:text-blue-800"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" class="text-form-info hover:text-cyan-700"><i class="fab fa-twitter-square"></i></a>
                        <a href="#" class="text-form-danger hover:text-red-700"><i class="fab fa-instagram-square"></i></a>
                        <a href="#" class="text-form-dark hover:text-gray-800"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </form>
        </div>
        <!-- Columna de la imagen (Derecha) -->
        <div class="hidden md:flex md:col-span-1 flex-col items-center justify-center p-4"> {{-- Oculto en móvil, flex en MD+ --}}
            <div class="w-full h-full flex items-center justify-center">
                <img alt="imagen de prueba" src="{{asset('img/4.svg')}}" class="w-full h-auto object-contain max-h-[500px]"/>
            </div>
        </div>
    </div>
</div>
