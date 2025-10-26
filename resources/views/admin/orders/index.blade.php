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
                        <h1 class="page-title fs-18 lh-1">Pedidos</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-example1 mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Frontend</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pedidos</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-12">
                    @include('admin.layouts.alerts')
                    <div class="card">
                        <div class="card-header justify-between">
                            <h4 class="d-flex-items gap-10">Pedidos: <span class="badge bg-label-warning">{{ count($orders) }}</span></h4>
                        </div>
                        <div class="card-body pt-15">
                            <div class="table-responsive">
                                <table id="commonTable" class="table text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>N° Pedido</th>
                                            <th>Cliente</th>
                                            <th>Total</th>
                                            <th>Estado</th>
                                            <th>Detalle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $key=>$order )
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->user_name }}</td>
                                            <td>{{ $order->total }}</td>
                                            @if($order->status == 'pending')
                                            <td><span class="badge bg-label-warning">Pendiente</span></td>
                                            @elseif($order->status == 'completed')
                                            <td><span class="badge bg-label-success">Completado</span></td>
                                            @else
                                            <td><span class="badge bg-label-danger"> Anulado</span></td>
                                            @endif
                                            <td>
                                                <div class="d-flex-items gap-10">
                                                    <button class="btn-icon btn-info-light btn-edit"
                                                        type="button"
                                                        data-id="{{ $order->id }}">
                                                        <i class="ri-edit-line"></i>
                                                    </button>
                                                </div>
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
            @include('admin.orders.edit')
        </div>
    </div>
@endsection

@section('scripts_js')
    @include('admin.frontend.partials.js')
    <script src="{{ asset('template_admin/js/vendor/dataTable-active.js') }}"></script>
    <script>
            document.addEventListener("DOMContentLoaded", () => {
            const modalEl = document.getElementById("editTransferModal");
            const modal = new bootstrap.Modal(modalEl);
            const form = document.getElementById("editTransferForm");

            document.addEventListener("click", async (e) => {
                const btn = e.target.closest(".btn-edit");
                if (!btn) return;
                const id = btn.dataset.id;
                try {
                    const res = await fetch("{{ route('admin.orders.edit', ':id') }}".replace(':id', id), {
                        method: "GET",
                        headers: {
                            "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        },
                    });
                    if (!res.ok) throw new Error("Error al obtener datos");
                    const data = await res.json();
                    document.getElementById("edit-order-id").textContent  = data.order.id;
                    document.getElementById("edit-order-created").textContent  = data.order.created_at;
                    document.getElementById("edit-customer-name").textContent  = data.order.user_name;
                    document.getElementById("edit-customer-email").textContent  = data.order.user_email;
                    document.getElementById("edit-customer-phone").textContent  = data.order.user_celular;
                    document.getElementById("edit-customer-address").textContent  = data.order.user_direccion;

                    // limpiar la tabla de items
                    document.getElementById("edit-order-items").innerHTML = "";

                    data.order_items.forEach((item, index) => {
                        const tr = document.createElement("tr");
                        tr.innerHTML = `
                            <td>${index + 1}</td>
                            <td>${item.product_name}</td>
                            <td>${item.quantity}</td>
                            <td>${item.product_price}</td>
                        `;
                        document.getElementById("edit-order-items").appendChild(tr);
                    });
                    modal.show();
                } catch (err) {
                    console.error(err);
                    alert("Error al cargar datos del pedido");
                }
            });
        });
</script>
@endsection

