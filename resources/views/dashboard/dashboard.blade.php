@extends('layouts.app')


@section('content')
    <div class="container">
        <h2 class="mb-4">Panel de administración</h2>

        @include('dashboard.partials.create-form')

        {{-- Aquí iría la lista de posts --}}
        @include('dashboard.partials.posts-list')
        
        {{-- Modal de edición --}}
        @include('dashboard.partials.edit-modal')

    </div>
@endsection