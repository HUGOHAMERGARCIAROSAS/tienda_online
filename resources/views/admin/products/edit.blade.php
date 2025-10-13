@extends('admin.layouts.layout')
@section('styles_css')
    @include('admin.frontend.partials.css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('template_admin/css/plugins/dropzone.css') }}" rel="stylesheet">
    <style>
        .image-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        .image-wrapper {
            width: 100%;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            overflow: hidden;
        }

        .product-img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
            transition: transform 0.3s ease;
            background-color: #fff;
        }

        .product-img:hover {
            transform: scale(1.03);
        }
    </style>
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
                                    <input class="form-control" name="name" id="name" type="text" value="{{ $product->name }}" placeholder="Agregar un nombre">
                                    <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <label class="form-label" for="slug">Slug(URL)</label>
                                    <input class="form-control" name="slug" id="slug" type="text" value="{{ $product->slug }}" placeholder="Slug (URL)" readonly>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <label class="form-label" for="category">Categoría</label>
                                    <select class="form-select" id="category" name="category" aria-label="Default select example">
                                            <option selected value="0">Seleccionar Categoría</option>
                                            @foreach ($categories as $category )
                                                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <label class="form-label" for="codigo">Código (SKU)</label>
                                    <input class="form-control" name="codigo" id="codigo" type="text"  value="{{ $product->sku }}" readonly placeholder="CODIGO UNICO">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <label class="form-label" for="precio">Precio</label>
                                    <input class="form-control" name="precio" id="precio" type="text" value="{{ $product->price }}" placeholder="Precio">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <label class="form-label" for="precio_descuento">Precio Descuento</label>
                                    <input class="form-control" type="text" name="precio_descuento"  id="precio_descuento" value="{{ $product->discount_price }}" placeholder="Precio con descuento">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <label class="form-label" for="status">Estado</label>
                                    <select class="form-select" id="status" name="status" aria-label="Default select example">
                                        <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Activo</option>
                                        <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Inactivo</option>
                                    </select>
                                </div>
                                <hr class="mt-15">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured"  {{ $product->is_featured == 1 ? 'checked' : '' }} >
                                        <label class="form-check-label" for="is_featured">Producto destacado</label>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="is_new" name="is_new" {{ $product->is_new == 1 ? 'checked' : '' }} >
                                        <label class="form-check-label" for="is_new">Producto nuevo</label>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="is_offer" name="is_offer"  {{ $product->is_offer == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_offer">En oferta</label>
                                    </div>
                                </div>
                                <hr class="mt-15">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <label class="form-label">Imágenes del producto</label>
                                    <div class="row" id="product-images">
                                        @foreach ($images as $image)
                                            <div class="col-md-3 mb-3" id="image-{{ $image->id }}">
                                                <div class="card image-card">
                                                    <div class="image-wrapper">
                                                        <img src="{{ asset($image->url) }}" class="product-img" alt="Imagen">
                                                    </div>
                                                    <div class="card-body text-center mt-4">
                                                        <button type="button" class="btn btn-outline-danger btn-sm" onclick="deleteImage({{ $image->id }})">
                                                            <i class="fa fa-trash"></i> Eliminar
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <label class="form-label" for="image">Imagenes</label>
                                    <div class="card">
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
        quill.root.innerHTML = `{!! $product->description !!}`;
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
            let saveProduct = document.getElementById('saveProduct');
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
            let is_featured = document.getElementById('is_featured').checked ? 1 : 0;
            let is_new = document.getElementById('is_new').checked ? 1 : 0;
            let is_offer = document.getElementById('is_offer').checked ? 1 : 0;
            let productId = document.getElementById('product_id').value;

            let description = quill.root.innerHTML;
            if(name == '' || slug == '' || category == 0 || sku == '' || precio == '' || description == ''  ) {
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

            let url = "{{ route('admin.products.update', ':id') }}".replace(':id', productId);
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
                        window.location.href = "{{ route('admin.products.index') }}";
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


        function deleteImage(imageId) {
            let id = imageId;
            swal.fire({
                title: 'Eliminar imagen',
                text: '¿Estás seguro de que deseas eliminar esta imagen?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                $.ajax({
                    url: "{{ route('admin.products.deleteImage') }}",
                    type: 'POST',
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            $('#image-' + id).fadeOut(300, function() { $(this).remove(); });
                        } else {
                           swal.fire('Error', response.message, 'error');
                        }
                    },
                    error: function() {
                        swal.fire('Error', 'Error al eliminar la imagen', 'error');
                    }
                });
            });
        }
    </script>
@endsection
