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
                        <h1 class="page-title fs-18 lh-1">Clientes</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-example1 mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Frontend</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Clientes</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-12">
                    @include('admin.layouts.alerts')
                    <div class="card">
                        <div class="card-header justify-between">
                            <h4 class="d-flex-items gap-10">Clientes: <span class="badge bg-label-warning">{{ count($users) }}</span></h4>
                            <div class="d-flex flex-wrap gap-15">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addNewTransfer"><i class="ri-add-line"></i>
                                    Nuevo Cliente
                                </button>
                                <a class="btn btn-success text-white" href="javascript:void(0);"><i class="ri-download-2-line"></i> Exportar Clientes</a>
                            </div>
                        </div>
                        <div class="card-body pt-15">
                            <div class="table-responsive">
                                <table id="commonTable" class="table text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Celular</th>
                                            <th>Dirección</th>
                                            <th>Estado</th>
                                            <th>Editar</th>
                                            <th>Eliminar/Activar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $key=>$user )
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->celular }}</td>
                                            <td>{{ $user->direccion }}</td>
                                            @if($user->status == 1)
                                            <td><span class="badge bg-label-success">Activo</span></td>
                                            @else
                                            <td><span class="badge bg-label-danger">Inactivo</span></td>
                                            @endif
                                            <td>
                                                <div class="d-flex-items gap-10">
                                                    <button class="btn-icon btn-info-light" type="button"
                                                        data-bs-toggle="modal" data-bs-target="#editTransfer{{ $user->id }}">
                                                        <i class="ri-edit-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                @if($user->status == 1)
                                                    <div class="d-flex-items">
                                                        <form id="form-delete-{{ $user->id }}"
                                                            action="{{ route('admin.clients.delete',$user->id) }}" method="POST">
                                                            @csrf
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <button class="btn-icon btn-danger-light"  onclick="confirmDelete({{ $user->id }})" type="button">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                @else
                                                    <div class="d-flex-items">
                                                        <form id="form-status-{{ $user->id }}"
                                                            action="{{ route('admin.clients.status',$user->id) }}" method="POST">
                                                            @csrf
                                                            <button class="btn-icon btn-success-light"  onclick="confirmStatus({{ $user->id }})" type="button">
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
            @include('admin.clients.create')
            @include('admin.clients.update')
        </div>
    </div>
@endsection

@section('scripts_js')
    @include('admin.frontend.partials.js')
    <script src="{{ asset('template_admin/js/vendor/dataTable-active.js') }}"></script>
@endsection

