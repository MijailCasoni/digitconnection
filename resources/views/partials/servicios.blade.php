{{-- servicios.blade.php --}}
<section class="servicios py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Nuestros Servicios</h2>

    <div class="row">
      @include('partials.servicios.web')
      @include('partials.servicios.branding')
      @include('partials.servicios.whatsapp')
      @include('partials.servicios.plantillas')
      @include('partials.servicios.hosting') {{-- Aquí va tu nuevo servicio --}}
    </div>
  </div>
</section>