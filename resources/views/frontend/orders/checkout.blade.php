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
                    <a href="#" style="text-decoration: none;"> <span>Finalizar compra</span>
                    </a>
                </li>
            </ol>
        </nav>
    </div>
   <div class="page-width main-content py-5">
  <div id="wrapper" class="container">
    <div class="row g-4">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title mb-4">
              <i class="bi bi-cart3 me-2"></i>Mis Datos
            </h4>
            <div id="cart-items" class="d-flex flex-column gap-3"></div>
            <div id="empty-cart" class="text-center text-muted py-4 d-none">
              <p>Tu carrito está vacío 🛒</p>
              <a href="/" class="btn btn-outline-primary btn-sm">Seguir comprando</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body summary">
            <h4 class="card-title mb-4">Resumen de la compra</h4>
            <p class="fs-5">
              <strong>Total:</strong> <span id="total">S/ 0.00</span>
            </p>
            <button class="btn btn-checkout mt-3" id="btnFinalizar">
              FINALIZAR COMPRA
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@section('content_script')
    <script src="{{ asset('template/js/bottom-38a1a7843.js') }}"></script>
@endsection
