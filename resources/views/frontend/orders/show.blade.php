@extends('template_frontend.layout')
@section('content_style')
    <link rel="stylesheet" href="{{ asset('template/css/theme-0fe2be841.css') }}" media="all">
@endsection
@section('content')
    <div class="page-width top-content">
        <div class="page-width main-content">
            <div id="wrapper" class="clearfix container">
              <div class="row">
                  <div id="content-wrapper" class="content-wrapper">
                    <section id="main" class="container">
                      <div class="cart-grid">
                          <div class="cart-grid-body">
                              <header class="page-header">
                                  <h3 class="h1">Carrito de Compras</h3>
                              </header>
                          </div>
                      </div>
                    </section>
                  </div>
              </div>
            </div>
        </div>
    </div>
@endsection
@section('content_script')
<script src="{{ asset('template/js/bottom-695441840.js') }}"></script>
@endsection