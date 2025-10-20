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
                        <h1 class="page-title fs-18 lh-1">Marcas</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-example1 mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Frontend</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Marcas</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-12">
                    @include('admin.layouts.alerts')
                    <div class="card">
                        <div class="card-header justify-between">
                            <h4 class="d-flex-items gap-10">Marcas: <span class="badge bg-label-warning">{{ count($brands) }}</span></h4>
                            <div class="d-flex flex-wrap gap-15">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addNewTransfer"><i class="ri-add-line"></i>
                                    Nueva Marca
                                </button>
                                <a class="btn btn-success text-white" href="javascript:void(0);"><i class="ri-download-2-line"></i> Exportar Marcas</a>
                            </div>
                        </div>
                        <div class="card-body pt-15">
                            <div class="table-responsive">
                                <table id="commonTable" class="table text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            {{-- <th>Categoría</th> --}}
                                            <th>Nombre</th>
                                            <th>Estado</th>
                                            <th>Editar</th>
                                            <th>Eliminar/Activar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($brands as $key=>$brand )
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $brand->name }}</td>
                                            @if($brand->status == 1)
                                            <td><span class="badge bg-label-success">Activo</span></td>
                                            @else
                                            <td><span class="badge bg-label-danger">Inactivo</span></td>
                                            @endif
                                            <td>
                                                <div class="d-flex-items gap-10">
                                                    <button class="btn-icon btn-info-light" type="button"
                                                        data-bs-toggle="modal" data-bs-target="#editTransfer{{ $brand->id }}">
                                                        <i class="ri-edit-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                @if($brand->status == 1)
                                                    <div class="d-flex-items">
                                                        <form id="form-delete-{{ $brand->id }}" 
                                                            action="{{ route('admin.brands.delete',$brand->id) }}" method="POST">
                                                            @csrf
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <button class="btn-icon btn-danger-light"  onclick="confirmDelete({{ $brand->id }})" type="button">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                @else
                                                    <div class="d-flex-items">
                                                        <form id="form-status-{{ $brand->id }}" 
                                                            action="{{ route('admin.brands.status',$brand->id) }}" method="POST">
                                                            @csrf
                                                            <button class="btn-icon btn-success-light"  onclick="confirmStatus({{ $brand->id }})" type="button">
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
            @include('admin.brand.create')
            @include('admin.brand.update')
        </div>
    </div>
@endsection

@section('scripts_js')
    @include('admin.frontend.partials.js')
    <script src="{{ asset('template_admin/js/vendor/dataTable-active.js') }}"></script>
@endsection

