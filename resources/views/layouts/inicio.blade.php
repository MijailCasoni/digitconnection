@extends('layouts.app')

@section('title', 'Inicio')
@section('content')
  <!-- Carrusel de imágenes como fondo -->
  <body>
    <div id="carouselExampleDark" class="carousel carousel-dark slide @yield('body-class')">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
          <img src="{{asset('./img/banner1.jpg')}}" class="d-block w-100" alt="">
          <div class="banner-text d-flex justify-content-left align-items-left carousel-caption d-none d-md-block">
            <div class="text-center text-white ">
                <h1>Digit-Connection</h1>
                <p>Explora nuestros servicios y soluciones personalizadas</p>
                <a href="{{route('contacto')}}" class="btn btn-primary">Hablemos¡</a>
            </div>
        </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="..." class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
    <!--<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>-->
    </div>

    <main>
      <section class="py-5 text-center container card-1">
        <h2>Necesitas una solución integral para dar a conocer tu proyecto?</h2>
      
        <p> En <b>Digit-Connection</b> nos especializamos en la creación de sitios web y aplicaciones web de alta 
          calidad que destacan y capturan la esencia de tu marca.</p> 
        <p>Nuestro equipo de expertos está dedicado a proporcionar soluciones innovadoras y personalizadas para tus necesidades digitales..</p>
      </section>
      <section class="py-5 text-center container card-1" >
        <h1>Que ofrecemos?</h2>
        <p>En <b>Digit-connection</b> podrás encontrar desde un diseño simple (<b>landing-page</b>) hasta un <b>sistema</b> que te permita</p>
        <p>gestionar y administrar tu sistema empresarial de manera eficiente y seguro</p>
      
      </section>
      <section class="py-5 text-center container card-1">
        <h2>Todo en un mismo sitio¡</h2>
        <p>En <b>Digit-Connection</b>, podrás encontrar no solo un sitio donde llevar a cabo tus ideas mas visionarias.</p>
        <p>También puedes encontrar nuestro servicio de <b><a href="{{ url('./servicios') }}">Hosting y Dominio</a></b> enfocado para los más exigentes¡</p>
      </section>
      
      <section class="py-5 text-center container clientes">
        <h2>Nuestros clientes</h2>
        <p>Estos son nuestros clientes y páginas relizadas.</p>
        <p>poner los proyectos realizados</p>
        <div class="carrousel">
        </div>
      </section>



</body>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
@endpush