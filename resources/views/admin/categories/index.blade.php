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
                        <h1 class="page-title fs-18 lh-1">Categorías</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-example1 mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Productos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sliders</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-12">
                    @include('admin.layouts.alerts')
                    <div class="card">
                        <div class="card-header justify-between">
                            <h4 class="d-flex-items gap-10">Categorías: <span class="badge bg-label-warning">{{ count($subcategories) }}</span></h4>
                            <div class="d-flex flex-wrap gap-15">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addNewTransfer"><i class="ri-add-line"></i>
                                    Nueva Categoría
                                </button>
                                <a class="btn btn-success text-white" href="javascript:void(0);"><i class="ri-download-2-line"></i> Exportar Categorías</a>
                            </div>
                        </div>
                        <div class="card-body pt-15">
                            <div class="table-responsive">
                                <table id="commonTable" class="table text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            {{-- <th>Categoría</th> --}}
                                            <th>Categoría</th>
                                            <th>Slug</th>
                                            <th>Estado</th>
                                            <th>Editar</th>
                                            <th>Eliminar/Activar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($subcategories as $key=>$scategory )
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            {{-- <td>{{ $scategory->name }}</td> --}}
                                            <td>{{ $scategory->subcategories_name }}</td>
                                            <td>{{ $scategory->subcategories_slug }}</td>
                                            @if($scategory->subcategories_status == 1)
                                            <td><span class="badge bg-label-success">Activo</span></td>
                                            @else
                                            <td><span class="badge bg-label-danger">Inactivo</span></td>
                                            @endif
                                            <td>
                                                <div class="d-flex-items gap-10">
                                                    <button class="btn-icon btn-info-light" type="button"
                                                        data-bs-toggle="modal" data-bs-target="#editTransfer{{ $scategory->subcategories_id }}">
                                                        <i class="ri-edit-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                @if($scategory->subcategories_status == 1)
                                                    <div class="d-flex-items">
                                                        <form id="form-delete-{{ $scategory->subcategories_id }}" 
                                                            action="{{ route('admin.categories.delete',$scategory->subcategories_id) }}" method="POST">
                                                            @csrf
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <button class="btn-icon btn-danger-light"  onclick="confirmDelete({{ $scategory->subcategories_id }})" type="button">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                @else
                                                    <div class="d-flex-items">
                                                        <form id="form-status-{{ $scategory->subcategories_id }}" 
                                                            action="{{ route('admin.categories.status',$scategory->subcategories_id) }}" method="POST">
                                                            @csrf
                                                            <button class="btn-icon btn-success-light"  onclick="confirmStatus({{ $scategory->subcategories_id }})" type="button">
                                                                <i class="ri-check-line"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.categories.create')
            @include('admin.categories.update')
        </div>
    </div>
@endsection

@section('scripts_js')
    @include('admin.frontend.partials.js')
    <script src="{{ asset('template_admin/js/vendor/dataTable-active.js') }}"></script>
@endsection

