@extends('layouts.app') <!-- Asegúrate de tener un layout base -->

@section('content')
<div class="container container-login card-2">
    <h2>Iniciar Sesión</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <form action="{{ route('login') }}" method="POST" class="login-form col-12">
        @csrf
        <div class="form-group inputs">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group inputs">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
    </form>
{{-- Columna imagen --}}
    <div class="m-15 w-100 h-100 text-center mb-5 mt-0 mb-md-0">
      <img
        src="{{ asset('img/login_img.png') }}"
        alt="DigitConnection"
        class="img-fluid"
        style="max-height: 400px;"
      >
    </div>
</div>
@endsection
