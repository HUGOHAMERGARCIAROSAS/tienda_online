@foreach ($orders as $pedido)
    <div class="modal" id="pedidoModal{{ $pedido->id }}" tabindex="-1"
         aria-labelledby="pedidoModalLabel{{ $pedido->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pedidoModalLabel{{ $pedido->id }}">
                        Pedido #{{ $pedido->id }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <strong>Cliente:</strong> {{ $pedido->user_name}}<br>
                        <strong>Fecha:</strong> {{ $pedido->fecha_formateada }}<br>
                        <strong>Estado:</strong> @if($pedido->status='paid') <span class="text-success">Pagado</span> @else <span class="text-danger">Pendiente</span> @endif
                    </div>

                    <h6>Items del pedido</h6>
                    <table class="table table-sm table-striped align-middle">
                        <thead class="table-light">
                            <tr>
                                <th class="text-center">Producto</th>
                                <th class="text-center">Cantidad</th>
                                <th class="text-center">Precio Unitario</th>
                                <th class="text-center">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $items = DB::table('order_items')
                                    ->join('products', 'products.id', '=', 'order_items.product_id')
                                    ->where('order_id', $pedido->id)
                                    ->get();
                            @endphp
                            @foreach ($items as $item)
                                <tr>
                                    <td class="text-center">{{ $item->name ?? '—' }}</td>
                                    <td class="text-center">{{ $item->quantity }}</td>
                                    <td class="text-center">S/ {{ number_format($item->price, 2) }}</td>
                                    <td class="text-end">S/ {{ number_format($item->quantity * $item->price, 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="text-end mt-3">
                        <strong>Total del pedido: </strong>
                        S/ {{ number_format($pedido->total, 2) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
