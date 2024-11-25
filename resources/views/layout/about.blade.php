@extends("layout.app")

@section('content')
<div class="container">
  <h1>Nosotros</h1>
  <p>Información sobre nosotros...</p>
  <h1>Aqui va una imagen de nosotros y nuestra misión y visión, Un poco de historia</h1>
</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush
