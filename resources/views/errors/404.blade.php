{{-- Test de vista personalizada --}}

@extends('layouts.app')

@section('title', 'Página no encontrada')


@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-brand-light dark:bg-brand-dark text-brand-base">
  <!-- Ícono o ilustración -->
  <div class="mb-8">
    <img src="{{ asset('images/404-illustration.svg') }}" 
         alt="404" 
         class="w-48 h-48 animate-pulse" />
  </div>

  <!-- Título -->
  <h1 class="text-6xl font-extrabold text-brand-accent mb-4">
    404
  </h1>

  <!-- Mensaje -->
  <p class="text-2xl mb-6">
    Ups… No encontramos la página que buscas.
  </p>

  <!-- Botones de acción -->
  <div class="space-x-4">
    <a href="{{ url('/') }}" 
       class="btn btn-primary px-6 py-3 shadow-lg hover:shadow-xl transition">
      Volver al inicio
    </a>
    <a href="{{ url('/contacto') }}" 
       class="btn btn-secondary px-6 py-3 shadow-lg hover:shadow-xl transition">
      Contáctanos
    </a>
  </div>
</div>
@endsection
