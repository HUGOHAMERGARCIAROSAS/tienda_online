@extends('admin.layouts.layout')
@section('styles_css')
    @include('admin.frontend.partials.css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('template_admin/css/plugins/dropzone.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="app-content-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-box d-flex-between flex-wrap gap-15">
                        <h1 class="page-title fs-18 lh-1">Nuevo Producto</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-example1 mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Inicio</a></li>
                                <li class="breadcrumb-item" aria-current="page">Producto</li>
                                <li class="breadcrumb-item active" aria-current="page">Crear Producto</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="">Nuevo Producto</h4>
                        </div>
                        <div class="card-body pt-15">
                            <div class="row gy-15">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <label class="form-label" for="name">Nombre del Producto</label>
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Agregar un nombre">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <label class="form-label" for="slug">Slug(URL)</label>
                                    <input class="form-control" name="slug" id="slug" type="text" placeholder="Slug (URL)" readonly>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <label class="form-label" for="category">Categoría</label>
                                    <select class="form-select" id="category" name="category" aria-label="Default select example">
                                            <option selected>Seleccionar Categoría</option>
                                            @foreach ($categories as $category )
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                    </select> 
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <label class="form-label" for="codigo">Código (SKU)</label>
                                    <input class="form-control" name="codigo" id="codigo" type="text"  readonly placeholder="CODIGO UNICO">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <label class="form-label" for="precio">Precio</label>
                                    <input class="form-control" name="precio" id="precio" type="text" placeholder="Precio">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <label class="form-label" for="precio_descuento">Precio Descuento</label>
                                    <input class="form-control" type="text" name="precio_descuento"  id="precio_descuento" placeholder="Precio con descuento">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <label class="form-label" for="status">Estado</label>
                                    <select class="form-select" id="status" name="status" aria-label="Default select example">
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                </div>
                                <hr class="mt-15">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1">
                                        <label class="form-check-label" for="is_featured">Producto destacado</label>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="is_new" name="is_new" value="1">
                                        <label class="form-check-label" for="is_new">Producto nuevo</label>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="is_offer" name="is_offer" value="1">
                                        <label class="form-check-label" for="is_offer">En oferta</label>
                                    </div>
                                </div>
                                <hr class="mt-15">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <label class="form-label" for="image">Imagenes</label>
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Dropzone</h4>
                                        </div>
                                        <div class="card-body pt-15">
                                            <form  class="dropzone" id="productDropzone" enctype="multipart/form-data"></form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Descripción</h4>
                                        </div>
                                        <div class="card-body pt-15">
                                            <div id="editor">
                                                <h3><span class="ql-size-large">Hello World!</span></h3>
                                                <p><br></p>
                                                <h3>This is an simple editable area.</h3>
                                                <p><br></p>
                                                <ul>
                                                    <li>
                                                        Select a text to reveal the toolbar.
                                                    </li>
                                                    <li>
                                                        Edit rich document on-the-fly, so elastic!
                                                    </li>
                                                </ul>
                                                <p><br></p>
                                                <p>
                                                    End of simple area
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="button" onclick="saveProduct()" id="saveProduct" class="btn btn-primary me-1">Guardar</button>
                                    <a href="{{ route('admin.products.index') }}" class="btn btn-outline-danger">Volver</a>
                                </div>
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
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="{{ asset('template_admin/js/plugins/dropzone-min.js') }}"></script>
    <script src="{{ asset('template_admin/js/vendor/dropzone-active.js') }}"></script>

    <script type="text/javascript">
        let quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>
    <script>
        document.getElementById('name').addEventListener('input', function() {
            let slugInput = document.getElementById('slug');
            let skuInput = document.getElementById('codigo');
            slugInput.value = this.value.normalize('NFD').replace(/[\u0300-\u036f]/g, '')
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9]+/g, '-') 
            .replace(/^-+|-+$/g, '');
            skuInput.value = this.value.replace(/\s+/g, '').substring(0, 5).toUpperCase() + '-' + Math.floor(100 + Math.random() * 900);

        });

        document.getElementById('precio').addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9.]/g, '');
            let precio_descuento = document.getElementById('precio_descuento');
            precio_descuento.value = this.value;
        })

        document.getElementById('precio_descuento').addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9.]/g, '');
        })

        function addVariant() {
            let name = document.getElementById('name').value;
            if(name == '') {
                swal.fire('Error', 'El nombre del producto es obligatorio', 'error');
                return;
            }
            let name_variant = document.getElementById('name_variant').value;
            let slug_variant = document.getElementById('slug_variant').value;
            let precio_variant = document.getElementById('precio_variant').value;
            let sku_variant = generarSku(name, name_variant);
            if(name_variant == '' || slug_variant == '' || precio_variant == '') {
                swal.fire('Error', 'Todos los campos son obligatorios', 'error');
                return;
            }
            let table = document.getElementById('commonTable');
            let rowCount = table.rows.length;
            for (let i = 0; i < rowCount; i++) {
                if (table.rows[i].cells[2].innerHTML == slug_variant.trim()) {
                    swal.fire('Error', 'La variante ya existe', 'error');
                    return;
                }
            }
            let row = table.insertRow(rowCount);
            let cell1 = row.insertCell(0);
            let cell2 = row.insertCell(1);
            let cell3 = row.insertCell(2);
            let cell4 = row.insertCell(3);
            let cell5 = row.insertCell(4);
            let cell6 = row.insertCell(5);
            cell1.innerHTML = rowCount;
            cell2.innerHTML = name_variant;
            cell3.innerHTML = slug_variant;
            cell4.innerHTML = precio_variant;
            cell5.innerHTML = sku_variant;
            cell6.innerHTML = '<button type="button" class="btn btn-danger" onclick="removeVariant(this)">Eliminar</button>';
            document.getElementById('name_variant').value = '';
            document.getElementById('slug_variant').value = '';
            document.getElementById('precio_variant').value = '';
        }
        function removeVariant(button) {
            swal.fire({
                title: '¿Desea eliminar esta variante?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, eliminar',
                cancelButtonText: 'No, cancelar',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    button.parentNode.parentNode.remove();
                }
            });
        }

        function generarSku(nombreProducto, nombreVariante) {
            const prefix = nombreProducto.replace(/\s+/g, '').substring(0, 5).toUpperCase();
            const suffix = nombreVariante.replace(/\s+/g, '').substring(0, 3).toUpperCase();
            const random = Math.floor(100 + Math.random() * 900);
            return `${prefix}-${suffix}-${random}`;
        }

        

        Dropzone.autoDiscover = false;

        let dropzone;

        document.addEventListener("DOMContentLoaded", function () {
            if (Dropzone.instances.length > 0) {
                Dropzone.instances.forEach(dz => dz.destroy()); 
            }
             dropzone = new Dropzone("#productDropzone", {
                url: "/fake-upload", 
                autoProcessQueue: false,
                uploadMultiple: true,
                parallelUploads: 5,
                maxFilesize: 5,
                acceptedFiles: "image/*",
                addRemoveLinks: true,
                dictRemoveFile: "Eliminar",
                dictDefaultMessage: "Arrastra o haz clic para subir imágenes",
            });
        });

        function saveProduct() {
            event.preventDefault();
            saveProduct.disabled = true;

            if (typeof dropzone === 'undefined') {
                Swal.fire('Error', 'Dropzone no está inicializado', 'error');
                return;
            }

            let name = document.getElementById('name').value;
            let slug = document.getElementById('slug').value;
            let category = document.getElementById('category').value;
            let sku = document.getElementById('codigo').value;
            let precio = document.getElementById('precio').value;
            let precio_descuento = document.getElementById('precio_descuento').value;
            let status = document.getElementById('status').value;
            let is_featured = document.getElementById('is_featured').value;
            let is_new = document.getElementById('is_new').value;
            let is_offer = document.getElementById('is_offer').value;
            let description = quill.root.innerHTML;
            if(name == '' || slug == '' || category == '' || sku == '' || precio == '' || description == ''  ) {
                swal.fire('Error', 'Todos los campos son obligatorios', 'error');
                saveProduct.disabled = false;
                return;
            }
            let formData = new FormData();
            formData.append('name', name);
            formData.append('slug', slug);
            formData.append('category', category);
            formData.append('sku', sku);
            formData.append('precio', precio);
            formData.append('precio_descuento', precio_descuento);
            formData.append('is_featured', is_featured);
            formData.append('is_new', is_new);
            formData.append('is_offer', is_offer);
            formData.append('status', status);
            formData.append('description', description);

            dropzone.getAcceptedFiles().forEach((file, index) => {
                formData.append(`images[${index}]`, file);
            });

            let url = "{{ route('admin.products.store') }}";
            let method = 'POST';

            fetch(url, {
                method: method,
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if(data.status == 'success') {
                    swal.fire('Éxito', data.message, 'success').then(() => {
                        window.location.href = "{{ route('admin.products.create') }}";
                    });
                } else {
                    swal.fire('Error', data.message, 'error');
                    saveProduct.disabled = false;
                }
            })
            .catch(error => {
                console.log(error);
                saveProduct.disabled = false;
            });
          
        }
    </script>
@endsection