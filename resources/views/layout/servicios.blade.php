@extends ('layout.app')

<section class="servicios-info py-5 bg-light">
  <div class="container text-center">
    <h2 class="mb-4">Nuestros Servicios</h2>
    <p class="lead text-muted mb-5">
      Ofrecemos soluciones digitales completas para potenciar tu presencia online.
    </p>

    <div class="row g-4">
      @foreach($servicios as $servicio)
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm border-0">
            <div class="card-body">
              <div class="mb-3">
                <i class="{{ $servicio['icono'] }} fs-2 text-primary"></i>
              </div>
              <h5 class="card-title">{{ $servicio['titulo'] }}</h5>
              <p class="card-text text-muted">{{ $servicio['descripcion'] }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>