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
                    <a href="#" style="text-decoration: none;"> <span>Recuperar contraseña</span>
                    </a>
                </li>
            </ol>
        </nav>
    </div>
    <div class="page-width main-content py-5">
        <div class="container">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Recuperar contraseña</h4>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('reset_password') }}">
                        @csrf
                        <input type="hidden" name="token" value="">
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" id="email" name="email" class="form-control"
                                    value="{{ $email ?? old('email') }}" required>
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary p-2">Restablecer Contraseña</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content_script')
    <script src="{{ asset('template/js/bottom-38a1a7843.js') }}"></script>
@endsection
