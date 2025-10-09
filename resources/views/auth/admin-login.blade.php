<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ADMINISTRADOR MJGLAM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-style-mode" content="1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('mj_glam_logo.png')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/vendor/animate.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/vendor/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/vendor/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/plugins/waves.min.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/plugins/nano.min.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/plugins/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/plugins/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/plugins/tabler-icons.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/main.css')}}">
</head>
<body class="body-area">
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="bd-preloader-content">
                    <div class="bd-preloader-logo">
                        <div class="bd-preloader-circle">
                            <svg width="190" height="190" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle stroke="#F5F5F5" cx="190" cy="190" r="250" stroke-width="6" stroke-linecap="round">
                                </circle>
                                <circle stroke="red" cx="190" cy="190" r="250" stroke-width="6" stroke-linecap="round">
                                </circle>
                            </svg>
                        </div>
                        <img src="{{asset('mj_glam_width.png')}}" alt="Imagen de carga">
                    </div>
                    {{-- <p class="bd-preloader-subtitle">MJ GLAM</p> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="page">
        <div class="authentication-wrapper cover-authentication">
            <div class="authentication-inner row">
                <div class="d-none d-lg-flex col-lg-6 col-md-6 p-0">
                    <div class="authentication-image d-flex justify-content-center align-items-center">
                        <img src="{{asset('mj_glam_logo.png')}}" alt="image">
                    </div>
                </div>
                <div class="d-flex col-lg-5 col-md-12 col-12 align-items-center">
                    <div class="card">
                        <div class="authentication-top text-center mb-25">
                            <a href="javascript:;" class="authentication-logo logo-black">
                                <img src="{{asset('mj_glam_width.png')}}" alt="logo">
                            </a>
                            <a href="javascript:;" class="authentication-logo logo-white">
                                <img src="{{asset('mj_glam_width.png')}}" alt="logo">
                            </a>
                            <h4 class="mb-5">Bienvenido a MJ GLAM</h4>
                            <p>Inicia sesión para continuar</p>
                        </div>
                        <form  action="{{ route('admin.login') }}" method="POST">
                            @csrf
                            <div class="mb-10">
                                <label for="nameEmail" class="form-label">Correo Electrónico</label>
                                <input type="text" value="admin@gmail.com" class="form-control" id="nameEmail" name="email" placeholder="Ingrese su correo electrónico" required>
                            </div>
                            <div class="mb-15">
                                <div class="d-flex justify-content-between mb-5">
                                    <label for="password" class="form-label mb-0">Contraseña</label>
                                    <a class="text-body" href="#">
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="password" value="123456" placeholder="Ingrese su contraseña" name="password" required>
                                        <button class="input-group-text text-black toggle-password" type="button"> <i class="ri-eye-line fs-20"></i> </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-25">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me">
                                    <label class="form-check-label" for="remember-me">
                                        Recuerdame
                                    </label>
                                </div>
                            </div>
                            <div class="mb-10">
                                <button class="btn btn-primary w-100" type="submit">Iniciar sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="{{asset('template_admin/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('template_admin/js/vendor/jquery-3.7.0.js')}}"></script>
    <script src="{{asset('template_admin/js/plugins/popper.min.js')}}"></script>
    <script src="{{asset('template_admin/js/vendor/height-equal.js')}}"></script>
    <script src="{{asset('template_admin/js/vendor/isotope.pkgd.js')}}"></script>
    <script src="{{asset('template_admin/js/vendor/magnific-popup.min.js')}}"></script>
    <script src="{{asset('template_admin/js/plugins/smooth-scrollbar.js')}}"></script>
    <script src="{{asset('template_admin/js/vendor/authentication.js')}}"></script>
    <script src="{{asset('template_admin/js/main.js')}}"></script>
    <script src="{{asset('template_admin/js/vendor/sidebar.js')}}"></script>
</body>
</html>