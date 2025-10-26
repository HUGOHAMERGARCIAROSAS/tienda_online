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
                    <a href="#" style="text-decoration: none;"> <span>Restablecer contraseña</span>
                    </a>
                </li>
            </ol>
        </nav>
    </div>
    <div class="page-width main-content py-5">
        <div class="container" style="max-width: 450px;">
            <h3 class="mb-4 text-center">Restablecer Contraseña</h3>
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input id="email" type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ $email ?? old('email') }}" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Nueva contraseña</label>
                    <input id="password" type="password"
                        class="form-control @error('password') is-invalid @enderror"
                        name="password" required>
                </div>

                <div class="mb-3">
                    <label for="password-confirm" class="form-label">Confirmar contraseña</label>
                    <input id="password-confirm" type="password"
                        class="form-control" name="password_confirmation" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Cambiar contraseña
                </button>
            </form>
        </div>
    </div>
@endsection
@section('content_script')
    <script src="{{ asset('template/js/bottom-38a1a7843.js') }}"></script>
@endsection
