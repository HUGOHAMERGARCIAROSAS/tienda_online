@foreach ($subcategories as $key => $category )
    <div class="modal fade" id="editTransfer{{ $category->subcategories_id }}" tabindex="-1" aria-labelledby="editTransfer{{ $category->subcategories_id }}Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal--lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-16" id="editTransfer{{ $category->subcategories_id }}Label">Actualizar Categoría</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.categories.update', $category->subcategories_id) }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row gy-15">
                            <div class="col-xl-12">
                                <label class="form-label">Nombre</label>
                                <input class="form-control input-titulo" rows="1" name="name" id="name" placeholder="Agregar un nombre" value="{{ $category->subcategories_name }}" required>
                            </div>
                            <div class="col-xl-12">
                                <label class="form-label">Slug</label>
                                <input type="hidden" name="parent_id" value="1">
                                <input class="form-control input-slug" type="text" name="slug" id="slug" placeholder="Agregar un slug" value="{{ $category->subcategories_slug }}"
                                    readonly required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
<script>
    document.addEventListener('input', function (event) {
        if (event.target.classList.contains('input-titulo')) {

            const tituloInput = event.target;
            const slugInput = tituloInput
                .closest('form')       
                .querySelector('.input-slug'); 

            if (!slugInput) return;

            const text = tituloInput.value;
            const slug = text
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '')
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9]+/g, '-')
                .replace(/^-+|-+$/g, '')
                .replace(/-+/g, '-');

            slugInput.value = slug;
        }
    });
</script>