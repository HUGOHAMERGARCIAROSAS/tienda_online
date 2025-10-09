@foreach ($sliders as $key => $slider )
    <div class="modal fade" id="editTransfer{{ $slider->id }}" tabindex="-1" aria-labelledby="editTransfer{{ $slider->id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal--lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-16" id="editTransfer{{ $slider->id }}Label">Editar Slider</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.frontend.sliders.update', $slider->id) }}" id="editTransferForm{{ $slider->id }}') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row gy-15">
                        <div class="col-xl-12">
                            <label class="form-label">Título</label>
                            <input class="form-control" rows="1" name="titulo" placeholder="Agregar una descripción" value="{{ $slider->titulo }}" required>
                        </div>
                        <div class="col-xl-12">
                            <label class="form-label">Imagen</label>
                            <a href="{{ asset('template_admin/images/sliders/'.$slider->imagen) }}" target="_blank">
                                <img src="{{ asset('template_admin/images/sliders/'.$slider->imagen) }}" alt="Imagen actual" class="img-fluid mb-2" style="max-height: 150px;">
                            </a>
                            <input class="form-control" type="file" name="imagen"   >
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