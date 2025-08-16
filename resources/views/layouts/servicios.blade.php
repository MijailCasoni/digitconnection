@extends('layouts.app')

@section('content')
<section class="py-20 bg-gradient-to-b from-gray-50 via-white to-gray-50">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h2 class="text-4xl font-extrabold bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 bg-clip-text text-transparent mb-4 tracking-tight">
      Nuestros Servicios
    </h2>
    <p class="text-lg text-black-500 max-w-2xl mx-auto mb-14">
      Impulsamos tu presencia digital con soluciones integrales que combinan diseño, tecnología y estrategia.
    </p>

    <div class="flex flex-wrap -mx-4">
      @foreach($servicios as $servicio)
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
          <div class="group bg-white rounded-xl shadow-sm border border-gray-100 
                      hover:shadow-[0_12px_40px_rgba(59,130,246,0.45)] 
                      transition-all duration-300 relative overflow-hidden h-full flex flex-col">
            
            <!-- Contenido -->
            <div class="p-8 flex flex-col flex-1">
              <div class="mb-6 text-primary-500 transform group-hover:scale-110 transition-transform duration-300">
                <i class="{{ $servicio['icono'] }} text-5xl"></i>
              </div>
              <h5 class="text-2xl font-semibold bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 bg-clip-text text-transparent">
                {{ $servicio['titulo'] }}
              </h5>
              <p class="text-gray-600 mb-6 flex-1">
                {{ $servicio['descripcion'] }}
              </p>
              <a href="contacto"
                 class="inline-flex items-center bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 bg-clip-text text-transparent font-medium group-hover:underline mt-auto">
                Saber más
                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300"
                     fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
@endsection