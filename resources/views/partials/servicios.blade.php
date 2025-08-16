<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Título -->
    <h2 class="text-center text-3xl sm:text-4xl font-extrabold tracking-tight mb-12">
      <span class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 bg-clip-text text-transparent">
        Nuestros Servicios
      </span>
    </h2>

    <!-- Grid de servicios -->
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

      @include('partials.servicios.web')
      @include('partials.servicios.branding')
      @include('partials.servicios.whatsapp')
     
      

    </div>
    @include('partials.servicios.hosting') {{-- Nuevo servicio --}}
  </div>
</section>