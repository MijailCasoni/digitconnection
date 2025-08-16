<section class="relative w-full h-[100vh] overflow-hidden group">
    <!-- Imagen de fondo -->
    <img src="{{ asset('./img/banner1.jpg') }}" 
         alt="Banner DigitConnection" 
         class="absolute inset-0 w-full h-full object-cover transform scale-105 transition-transform duration-[3000ms] ease-out group-hover:scale-100">
    
    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/70 via-slate-900/40 to-transparent z-10"></div>

    <!-- Contenido -->
    <div class="relative z-20 flex flex-col justify-center h-full px-6 sm:px-12 lg:px-20 max-w-4xl">
        <h1 class="text-4xl md:text-6xl font-bold text-white drop-shadow-lg animate-fade-up">
            ¡Conecta con el Futuro Digital!
        </h1>
        <p class="mt-4 text-lg md:text-xl text-slate-200 animate-fade-up delay-200">
            En DigitConnection, transformamos tus ideas en soluciones web y móviles innovadoras. 
            Tu éxito es nuestra prioridad.
        </p>

        <!-- Botón con tamaño más compacto -->
       <a href="{{ route('contacto') }}" 
   class="mt-6 inline-flex w-100 items-center justify-center 
          rounded-full bg-gradient-to-r from-indigo-700 via-purple-600 to-pink-500 
          shadow-md shadow-indigo-900/30 text-white font-semibold text-xl 
          py-2 px-4 hover:scale-105 hover:shadow-lg 
          transition duration-300 animate-fade-up delay-300">
    Comienza tu Proyecto Hoy
</a>


    </div>
</section>