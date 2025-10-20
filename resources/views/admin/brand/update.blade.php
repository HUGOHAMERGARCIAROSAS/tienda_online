@foreach ($brands as $key => $brand )
    <div class="modal fade" id="editTransfer{{ $brand->id }}" tabindex="-1" aria-labelledby="editTransfer{{ $brand->id }}Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal--lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-16" id="editTransfer{{ $brand->id }}Label">Actualizar Marca</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row gy-15">
                            <div class="col-xl-12">
                                <label class="form-label">Nombre</label>
                                <input class="form-control input-titulo" rows="1" name="name" id="name" placeholder="Agregar un nombre" value="{{ $brand->name }}" required>
                            </div>
                            <div class="col-xl-12">
                                <label class="form-label">Imagen</label>
                                <img src="{{ asset($brand->url) }}" alt="" class="img-fluid mb-4" width="100" height="100" >
                                <input class="form-control" type="file" name="image" id="image">
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