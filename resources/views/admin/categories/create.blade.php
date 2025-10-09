<div class="modal fade" id="addNewTransfer" tabindex="-1" aria-labelledby="addNewTransferLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal--lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-16" id="addNewTransferLabel">Crear Categoría</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row gy-15">
                        <div class="col-xl-12">
                            <label class="form-label">Nombre</label>
                            <textarea class="form-control" rows="1" name="name" id="name" placeholder="Agregar un nombre" required></textarea>
                        </div>
                        <div class="col-xl-12">
                            <label class="form-label">Slug</label>
                            <input type="hidden" name="parent_id" value="1">
                            <input class="form-control" type="text" name="slug" id="slug" placeholder="Agregar un slug"
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
<script>
      document.getElementById('name').addEventListener('input', function() {
        let slugInput = document.getElementById('slug');
        slugInput.value = this.value.normalize('NFD').replace(/[\u0300-\u036f]/g, '')
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9]+/g, '-') 
        .replace(/^-+|-+$/g, ''); 
    });
</script>

