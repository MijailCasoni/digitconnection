<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="mb-5">
    @csrf

    <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" name="titulo" id="titulo" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="contenido" class="form-label">Contenido</label>
        <textarea name="contenido" id="contenido" rows="5" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen destacada</label>
        <input type="file" name="imagen" id="imagen" class="form-control">
    </div>

    <div class="mb-3">
        <label for="fuentes" class="form-label">Fuentes (opcional)</label>
        <input type="text" name="fuentes" id="fuentes" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Publicar</button>
</form>