@extends('layout.app')

@section('title', 'Inicio')


@section('content')
@include('partials.hero')
@include('partials.intro')
@include('partials.ventajas')
@include('partials.servicios')
@include('partials.proyectos')
@include('partials.form-contact')
@endsection

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
  <link rel="stylesheet" href="{{ asset('css/intro.css') }}">
  <link rel="stylesheet" href="{{ asset('css/ventajas.css') }}">
@endpush