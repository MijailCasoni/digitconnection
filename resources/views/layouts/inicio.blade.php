@extends('layouts.app')
  

@section('content')
    {{-- Aquí van los partials específicos de la página de inicio --}}
    @include('partials.hero')
    @include('partials.intro')
    @include('partials.ventajas')
    @include('partials.servicios')
    @include('partials.proyectos')
    @include('partials.form-contact')

    {{-- Ya no se necesita @push('styles') aquí porque app.css ya importa todo --}}
@endsection

