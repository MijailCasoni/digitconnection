@foreach($posts as $post)
<div class="card mb-4 shadow-sm">
    @if($post->imagen_url)
    <img src="{{ $post->imagen_url }}" class="card-img-top" alt="Imagen del post">
    @endif

    <div class="card-body">
        <h5 class="card-title">{{ $post->titulo }}</h5>
        <p class="card-text">{{ Str::limit($post->contenido, 150) }}</p>

        <p class="text-muted mb-1">
            Publicado el {{ $post->created_at->format('d/m/Y') }} por <strong>{{ $post->user->name }}</strong>
        </p>

        @if($post->fuentes)
        <footer class="blockquote-footer">Fuente: {{ $post->fuentes }}</footer>
        @endif

        <div class="d-flex justify-content-between mt-3">
            <button
                class="btn btn-sm btn-warning"
                data-bs-toggle="modal"
                data-bs-target="#editPostModal"
                data-id="{{ $post->id }}"
                data-titulo="{{ $post->titulo }}"
                data-contenido="{{ $post->contenido }}"
                data-fuentes="{{ $post->fuentes }}"
                data-imagen="{{ $post->imagen_url }}">
                Editar
            </button>

            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('¿Eliminar este post?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger">Eliminar</button>

            </form>
        </div>
    </div>
</div>
@endforeach

@if($posts->isEmpty())
<div class="alert alert-info">No hay publicaciones aún.</div>
@endif