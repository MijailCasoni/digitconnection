@extends('layout.app')

@section('content')
<div class="container-fluid ">
  <div class="row mb-3">
      <!-- Columna del formulario -->
      <div class="col-md-6 d-flex align-items-center mt-5">

  
  <form action="{{ route('contact.submit') }}" method="POST" class="w-75 mx-auto mt-4">
    <h2>Contáctanos</h2>
    @csrf
    <div class="form-group mb-3">
      <label for="name">Nombre de la empresa:</label>
      <input type="text" name="name-bsn" id="name" class="form-control" value="{{ old('name-bsn') }}" required>
      @error('name')
          <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
    @csrf
    <div class="mb-3">
      <label for="relationship" class="form-label">Relación con la Empresa</label>
      <select class="form-select" id="relationship" name="relationship" required>
          <option value="" selected disabled>Seleccione una opción</option>
          <option value="Dueño">Dueño</option>
          <option value="Administrador">Administrador</option>
          <option value="Equipo TI">Equipo TI</option>
      </select>
    </div>


    <div class="form-group mb-3">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group mb-3">
      <label for="email">Ciudad de Contacto</label>
      <input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}" required>
      @error('city')
          <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
    @csrf
    <div class="mb-3">
      <label for="relationship" class="form-label">Cuentas con dominio?</label>
      <select class="form-select" id="relationship" name="relationship" required>
          <option value="" selected disabled>Seleccione una opción</option>
          <option value="Si">Si</option>
          <option value="No">No</option>
      </select>
    </div>
    <div class=" mb-3">
      <label for="email">Ya cuentas con uno? Cuentanos cual es¡</label>
      <input type="text" name="domain" id="domain" class="form-control" value="{{ old('domain') }}" required>
      @error('city')
          <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
    <div class="mb-3">
      <label for="relationship" class="form-label">Que tipo de sitio necesitas?</label>
      <select class="form-select" id="relationship" name="relationship" required>
          <option value="" selected disabled>Seleccione una opción</option>
          <option value="landingpage">Landing Page</option>
          <option value="Blog">Blog</option>
          <option value="Blog">E-commerce</option>
          <option value="Blog">Informativo</option>
          <option value="Blog">Sistema dedicad/Sistema Web</option>
      </select>
    </div>
    <div class="form-group mb-3">
        <label for="message">Mensaje:</label>
        <textarea name="message" id="message" class="form-control" rows="5" required>{{ old('message') }}</textarea>
        @error('message')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary mt-3">Enviar</button>
  </form>
    </div>
    <!-- Columna de la imagen -->
    <div class="col-md-6 d-none d-md-block mt-5">
      <div class="h-100 mt-3" >
        <img alt="imagen de prueba" src="{{asset('./images/4.jpg')}}"/>
      </div>
    </div>
  </div>
</div>
@endsection

<!-- Script de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

