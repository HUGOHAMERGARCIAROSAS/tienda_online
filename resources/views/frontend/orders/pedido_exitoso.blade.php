@extends('template_frontend.layout')
@section('content_style')
    <link rel="stylesheet" href="{{ asset('template/css/theme-6825b4844.css') }}" media="all">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/> --}}
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
                    <a href="#" style="text-decoration: none;"> <span>Finalizar compra</span>
                    </a>
                </li>
            </ol>
        </nav>
    </div>
    <div class="page-width main-content">
        <div class="container">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">✅ Pedido realizado exitosamente</h4>
                </div>

                <div class="card-body">
                    <div class="mb-4">
                        <h5>🧾 Detalles del pedido</h5>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row">Número de pedido:</th>
                                    <td>#{{ $order->id }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Cliente:</th>
                                    <td>{{ $order->user_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Estado:</th>
                                    <td>
                                        @if ($order->status === 'pending')
                                            <span class="badge bg-warning text-dark">Pendiente</span>
                                        @elseif ($order->status === 'completed')
                                            <span class="badge bg-success">Completado</span>
                                        @else
                                            <span class="badge bg-secondary">{{ ucfirst($order->status) }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Fecha:</th>
                                    <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Total:</th>
                                    <td><strong>S/ {{ number_format($order->grand_total, 2) }}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <hr>

                    <h5>🛍️ Productos</h5>
                    <div class="table-responsive">
                        <table class="table table-striped align-middle">
                            <thead class="table-success">
                                <tr>
                                    <th>Producto</th>
                                    <th class="text-center">Cantidad</th>
                                    <th class="text-center">Precio (S/)</th>
                                    <th class="text-end">Subtotal (S/)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td class="text-center">{{ $item->quantity }}</td>
                                        <td class="text-center">{{ number_format($item->price, 2) }}</td>
                                        <td class="text-end">{{ number_format($item->subtotal, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-end fw-bold">Total</td>
                                    <td class="text-end fw-bold">S/ {{ number_format($order->grand_total, 2) }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="text-center mt-4">
                        <a href="{{ url('/') }}" class="btn btn-outline-success">
                            🏠 Volver a la tienda
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content_script')
    <script src="{{ asset('template/js/bottom-38a1a7843.js') }}"></script>
@endsection
