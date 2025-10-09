@extends('admin.layouts.layout')
@section('styles_css')
    @include('admin.frontend.partials.css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
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
                                            <label class="form-label" for="email">Categoría</label>
                                            <select class="form-select" id="category" name="category" aria-label="Default select example">
                                                    <option selected>Seleccionar Categoría</option>
                                                    @foreach ($categories as $category )
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                            </select> 
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6">
                                            <label class="form-label" for="codigo">Código (SKU)</label>
                                            <input class="form-control" name="name" id="codigo" type="text" placeholder="CODIGO UNICO">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6">
                                            <label class="form-label" for="precio">Precio</label>
                                            <input class="form-control" name="precio" id="precio" type="text" placeholder="Precio">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6">
                                            <label class="form-label" for="precio_descuento">Precio Descuento</label>
                                            <input class="form-control" type="text" name="precio_descuento  id="precio_descuento" placeholder="Precio con descuento">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6">
                                            <label class="form-label" for="status">Estado</label>
                                            <select class="form-select" id="status" name="status" aria-label="Default select example">
                                                <option selected>Seleccionar Estado</option>
                                                <option value="1">Activo</option>
                                                <option value="0">Inactivo</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-12 col-lg-6 col-md-6">
                                            <label class="form-label" for="name">Imagen Destacada</label>
                                            <input class="form-control" name="name" id="name" type="file" placeholder="Agregar un nombre">
                                        </div>
                                        <div class="col-xl-12 col-lg-6 col-md-6">
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
                                        <div class="col-xl-12 col-lg-6 col-md-6">
                                            <div class="card">
                                                <div class="card-header justify-between">
                                                    <h4 class="card-title">Variantes del Producto</h4>
                                                    <button type="button" class="btn btn-primary"><i class="ri-add-line"></i>
                                                        Agregar Variante
                                                    </button>
                                                </div>
                                                <div class="card-body pt-15">
                                                    <div class="row">
                                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                                            <label class="form-label" for="name">Nombre</label>
                                                            <input class="form-control" name="name" id="name" type="text" placeholder="Agregar un nombre">
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                                            <label class="form-label" for="slug">Slug(URL)</label>
                                                            <input class="form-control" name="slug" id="slug" type="text" placeholder="Slug (URL)" readonly>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                                            <label class="form-label" for="email">Precio</label>
                                                            <input class="form-control" name="precio" id="precio" type="text" placeholder="Precio">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header justify-between">
                                                    <h4 class="card-title">Variantes del Producto</h4>
                                                </div>
                                                <div class="card-body pt-15">
                                                    <div class="table-responsive">
                                                        <table id="commonTable" class="table text-nowrap w-100">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Nombre</th>
                                                                    <th>Slug</th>
                                                                    <th>Precio</th>
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
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-primary me-1">Guardar</button>
                                            <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
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
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>
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
@endsection