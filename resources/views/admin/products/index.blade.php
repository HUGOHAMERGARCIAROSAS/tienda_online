@extends('admin.layouts.layout')
@section('styles_css')
    @include('admin.frontend.partials.css')
@endsection
@section('content')
    <div class="app-content-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-box d-flex-between flex-wrap gap-15">
                        <h1 class="page-title fs-18 lh-1">Productos</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-example1 mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Productos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Listado</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-12">
                    @include('admin.layouts.alerts')
                    <div class="card">
                        <div class="card-header justify-between">
                            <h4 class="d-flex-items gap-10">Productos: <span class="badge bg-label-warning"></span></h4>
                            <div class="d-flex flex-wrap gap-15">
                                <a href="{{ route('admin.products.create') }}"  class="btn btn-primary"><i class="ri-add-line"></i>
                                    Nuevo Producto
                                </a>
                                <a class="btn btn-success text-white" href="javascript:void(0);"><i class="ri-download-2-line"></i> Exportar Productos</a>
                            </div>
                        </div>
                        <div class="card-body pt-15">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="filter_name" class="form-label">Nombre:</label>
                                    <input type="text" id="filter_name" name="filter_name" class="form-control" placeholder="Buscar por nombre...">
                                </div>
                                <div class="col-md-4">
                                    <label for="filter_sku" class="form-label">Código (SKU):</label>
                                    <input type="text" id="filter_sku" name="filter_sku" class="form-control" placeholder="Buscar por código (SKU)...">
                                </div>
                                <div class="col-md-4">
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="commonTable" class="table text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Precio</th>
                                            <th>Descuento</th>
                                            <th>SKU</th>
                                            <th>Estado</th>
                                            <th>Fecha</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts_js')
    @include('admin.frontend.partials.js')
    <script>
         $(document).ready(function () {
            let table = $('#commonTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.products.data') }}",
                    type: 'GET',
                    data: function (d) {
                        d.name = $('#filter_name').val();
                        d.sku = $('#filter_sku').val();
                    },
                    error: function (xhr, error, code) {
                        console.log(error);
                    }
                },
                columns: [
                    { data: 'id', name: 'id',
                        render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                     },
                    { data: 'name', name: 'name' },
                    { data: 'price', name: 'price' },
                    { data: 'discount_price', name: 'discount_price' },
                    { data: 'sku', name: 'sku' },
                    {
                        data: 'status',
                        name: 'status',
                        render: function (data, type, row) {
                            if (row.status == 1) {
                                return '<span class="badge bg-label-success">Activo</span>';
                            } else {
                                return '<span class="badge bg-label-danger">Inactivo</span>';
                            }
                        },
                    },
                    { data: 'created_at', name: 'created_at' },
                    {
                        data: 'acciones',
                        name: 'acciones',
                        orderable: false,
                        searchable: false,
                        render: function (data, type, row) {
                            return `
                                <button class="btn btn-primary btn-sm btn-edit" data-id="${row.id}" data-url=""><i class="ri-edit-line"></i> Editar</button>
                                <button class="btn btn-danger btn-sm btn-delete" data-id="${row.id}" data-url=""><i class="ri-delete-bin-line"></i> Eliminar</button>
                            `;
                        },
                    },
                ],
                pageLength: 10,
                searching: false
            });

            $('#filter_name, #filter_sku').on('keyup', function () {
                table.ajax.reload();
            });


        });

        $(document).on('click', '.btn-edit', function () {
            let id = $(this).data('id');
            let url = "{{ route('admin.products.edit', ':id') }}";
            url = url.replace(':id', id);
            window.location.href = url;
        });

        $(document).on('click', '.btn-delete', function () {
            let id = $(this).data('id');
            swal.fire({
                title: 'Eliminar producto',
                text: '¿Estás seguro de que deseas eliminar este producto?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch("{{ route('admin.products.delete', ':id') }}".replace(':id', id), {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            swal.fire('Eliminado', data.message, 'success');
                            $('#commonTable').DataTable().ajax.reload();
                        } else {
                            swal.fire('Error', data.message, 'error');
                        }
                    })
                    .catch(error => {
                        console.log(error);
                    });
                }
            });
        });
    </script>

@endsection

