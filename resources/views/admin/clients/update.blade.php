@foreach ($users as $key => $client )
    <div class="modal fade" id="editTransfer{{ $client->id }}" tabindex="-1" aria-labelledby="editTransfer{{ $client->id }}Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal--lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-16" id="editTransfer{{ $client->id }}Label">Actualizar Marca</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row gy-15">
                            <div class="col-xl-12">
                                <label class="form-label">Nombres</label>
                                <input class="form-control input-titulo" rows="1" value="{{ $client->name }}" name="name" id="name" placeholder="Agregar un nombre" required>
                            </div>
                            <div class="col-xl-12">
                                <label class="form-label">Correo Electronico / Usuario</label>
                                <input class="form-control" type="email" name="email" id="email" value="{{ $client->email }}" placeholder="Agregar un correo electronico" required>
                            </div>
                            <div class="col-xl-12">
                                <label class="form-label">Telefono</label>
                                <input class="form-control" type="text" name="celular" value="{{ $client->celular }}" maxlength="9" id="celular" placeholder="Agregar un telefono" required>
                            </div>
                            <div class="col-xl-12">
                                <label class="form-label">Direccion</label>
                                <input class="form-control" type="text" name="direccion" value="{{ $client->direccion }}" id="direccion" placeholder="Agregar una direccion" required>
                            </div>
                            <div class="col-xl-12">
                                <label class="form-label">No ingresar si no desea cambiar la contraseña </label>
                            </div>
                            <div class="col-xl-12">
                                <label class="form-label">Contraseña</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Agregar una contraseña" >
                            </div>
                            <div class="col-xl-12">
                                <label class="form-label">Confirmar Contraseña</label>
                                <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar contraseña" >
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
