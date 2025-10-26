<!-- Modal -->
<div class="modal " id="editTransferModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Ver Orden</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div id="editTransferForm">
          <input type="hidden" name="id" id="edit-id">


            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="mb-0">Orden <span class="text-primary" id="edit-order-id"></span></h2>
                    <small class="muted">Creada: <span id="edit-order-created"></span></small>
                </div>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-md-12">
                    <div class="order-header">
                    <h6 class="mb-2">Cliente</h6>
                    <p class="mb-1 fw-semibold" data-customer-name>Nombre: <span id="edit-customer-name"></span></p>
                    <p class="mb-0 muted" data-customer-email>Correo electrónico: <span id="edit-customer-email"></span></p>
                    <p class="mb-0 muted" data-customer-phone>Celular: <span id="edit-customer-phone"></span></p>
                    <p class="mb-0 muted" data-customer-address>Dirección: <span id="edit-customer-address"></span></p>
                    </div>
                </div>
             </div>

            <div class="card mb-3">
                <div class="card-body p-0">
                    <div class="table-responsive">
                    <table class="table table-borderless table-products mb-0">
                        <thead class="table-light">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col" style="width:120px;">Precio unit.</th>
                            <th scope="col" style="width:110px;">Cantidad</th>
                            <th scope="col" style="width:140px;" class="text-end">Subtotal</th>
                        </tr>
                        </thead>
                        <tbody id="edit-order-items">
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

