@extends('template_frontend.layout')
@section('content_style')
    <link rel="stylesheet" href="{{ asset('template/css/theme-6825b4844.css') }}" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{'template/css/cart.css'}}"/>
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
                    <a href="#" style="text-decoration: none;"> <span>Mis Datos</span>
                    </a>
                </li>
                <li>
                    {{--  cerrar sesion  --}}
                    <form action="{{ route('logout') }}" method="POST" style ="display: inline-block">
                        @csrf
                        <button type="submit" class="btn btn-danger " style="background: red;border: 1px solid red">Cerrar Sesión</button>
                    </form>
                </li>
            </ol>
        </nav>
    </div>
   <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="{{ route('client.update', $user->id) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre completo</label>
                            <input type="text" id="name" name="name" class="form-control"
                                    value="{{ $user->name}}" required>
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico / Usuario</label>
                            <input type="email" id="email" name="email" class="form-control"
                                    value="{{ $user->email}}" required>
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="celular" class="form-label">Celular</label>
                            <input type="text" id="celular" name="celular" class="form-control" required
                                    value="{{ $user->celular}}">
                            @error('celular') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" id="direccion" name="direccion" class="form-control" required
                                    value="{{ $user->direccion}}">
                            @error('direccion') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña <span class="text-danger">*</span></label>
                            <input type="password" id="password" name="password" class="form-control"
                                    value="">
                            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirmar Contraseña <span class="text-danger">*</span></label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                                    value="">
                            @error('password_confirmation') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    <span class="text-danger">* No es necesario si no desea cambiar la contraseña</span>
                </div>
                <div class="text-center mt-4">

                    <button type="submit" class="btn btn-success p-3" style="background: #0d6efd; border: 1px solid #0d6efd"
                     >
                        <i class="fa fa-save"></i> Guardar cambios
                    </button>
                    <a href="{{ route('frontend.mis_pedidos')}}" class="btn btn-success p-3" style="background: #198754; border: 1px solid #198754">
                        <i class="fa fa-list"></i> MIS PEDIDOS
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('content_script')
    <script src="{{ asset('template/js/bottom-38a1a7843.js') }}"></script>
    <script src="{{ asset('template/js/cart.js') }}"></script>
@endsection
