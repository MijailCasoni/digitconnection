<!-- Modal -->
<div class="modal fade" id="editPostModal" tabindex="-1" aria-labelledby="editPostModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form method="POST" action="{{ route('posts.update', $post->id ?? 0) }}" enctype="multipart/form-data" class="modal-content">
            @csrf
            @method('PUT')

            <div class="modal-header">
                <h5 class="modal-title" id="editPostModalLabel">Editar publicación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="edit_titulo" class="form-label">Título</label>
                    <input type="text" name="titulo" id="edit_titulo" class="form-control" value="{{ $post->titulo ?? '' }}" required>
                </div>

                <div class="mb-3">
                    <label for="edit_contenido" class="form-label">Contenido</label>
                    <textarea name="contenido" id="edit_contenido" rows="5" class="form-control" required>{{ $post->contenido ?? '' }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="edit_imagen" class="form-label">Imagen destacada</label>
                    <input type="file" name="imagen" id="edit_imagen" class="form-control">
                    @if(!empty($post->imagen_url))
                        <img src="{{ $post->imagen_url }}" alt="Imagen actual" class="img-fluid mt-2 rounded" style="max-height: 200px;">
                    @endif
                </div>

                <div class="mb-3">
                    <label for="edit_fuentes" class="form-label">Fuentes</label>
                    <input type="text" name="fuentes" id="edit_fuentes" class="form-control" value="{{ $post->fuentes ?? '' }}">
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('editPostModal');
    modal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;

        // Obtener datos del botón
        const id = button.getAttribute('data-id');
        const titulo = button.getAttribute('data-titulo');
        const contenido = button.getAttribute('data-contenido');
        const fuentes = button.getAttribute('data-fuentes');
        const imagen = button.getAttribute('data-imagen');

        // Asignar valores al formulario
        modal.querySelector('form').action = `/posts/${id}`;
        modal.querySelector('#edit_titulo').value = titulo;
        modal.querySelector('#edit_contenido').value = contenido;
        modal.querySelector('#edit_fuentes').value = fuentes;

        const imgPreview = modal.querySelector('#edit_imagen_preview');
        if (imagen) {
            imgPreview.src = imagen;
            imgPreview.style.display = 'block';
        } else {
            imgPreview.style.display = 'none';
        }
    });
});

</script>
@endpush