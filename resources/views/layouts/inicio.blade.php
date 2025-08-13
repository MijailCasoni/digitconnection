@extends('layouts.app') {{-- Corregido: 'layout' a 'layouts' --}}

@section('title', 'Inicio')


@section('content')
@include('partials.hero')
@include('partials.intro')
@include('partials.ventajas')
@include('partials.servicios')
@include('partials.proyectos')
@include('partials.form-contact')
@endsection


