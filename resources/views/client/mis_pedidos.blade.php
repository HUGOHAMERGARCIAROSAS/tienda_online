@extends('template_frontend.layout')
@section('content_style')
    <link rel="stylesheet" href="{{ asset('template/css/theme-6825b4844.css') }}" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
@endsection
@section('content')
    <div class="page-width top-content">
        <nav data-depth="4" class="breadcrumb">
            <ol>
                <li>
                    <a href="{{ url('/') }}" style="text-decoration: none;"> <span>Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="#" style="text-decoration: none;"> <span>Mis Pedidos</span>
                    </a>
                </li>
            </ol>
        </nav>
    </div>
    <div class="page-width main-content">
        <div class="container py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Mis Pedidos</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class="text-center">N° Pedido</th>
                                            <th class="text-center">Fecha</th>
                                            <th class="text-center">Estado</th>
                                            <th class="text-center">Total</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $key => $pedido)
                                            <tr>
                                                <td class="text-center">{{ $key + 1 }}</td>
                                                <td class="fw-bold text-primary  text-center">{{ $pedido->id }}</td>
                                                <td class="text-center">{{ $pedido->fecha_formateada}}</td>
                                                @if($pedido->status == 'pending')
                                                    <td class="text-center"><span class="badge bg-warning text-dark">Pendiente</span></td>
                                                @elseif($pedido->status == 'paid')
                                                    <td class="text-center"><span class="badge bg-success">Pagado</span></td>
                                                @else
                                                    <td class="text-center"><span class="badge bg-danger">Anulado</span></td>
                                                @endif
                                                <td class="text-center">S/ {{ $pedido->total }}</td>
                                                <td class="text-center">
                                                   <button type="button" class="btn btn-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#pedidoModal{{ $pedido->id }}">
                                                        Detalles
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $orders->onEachSide(1)->links('vendor.pagination.bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('client.partials.modal')

@endsection
@section('content_script')
    <script src="{{ asset('template/js/bottom-38a1a7843.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
