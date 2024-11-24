@extends('layout.app') <!-- Usando la plantilla principal si existe -->

@section('content')
    <h1>Bienvenido al Dashboard</h1>
    <p>Has iniciado sesión correctamente.</p>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Cerrar Sesión
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endsection
