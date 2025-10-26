@extends('template_frontend.layout')
@section('content_style')
    <link rel="stylesheet" href="{{ asset('template/css/theme-0fe2be841.css') }}" media="all">
@endsection
@section('content')
    <div class="page-width top-content">
        <nav data-depth="2" class="breadcrumb">
            <ol>
                <li>
                    <a href="{{ url('/') }}"> <span>Inicio</span></a>
                </li>
                <li>
                    <span>Inicio de sesión</span>
                </li>
            </ol>
        </nav>
    </div>
    <div class="page-width main-content">
        <div id="wrapper" class="clearfix container">
            <div class="row">
                <div id="content-wrapper" class="content-wrapper">
                    <section id="main">
                        <section id="content" class="page-content card card-block">
                            <div class="authentication-page row">
                                <div class="register-section col-xs-12 col-sm-6">
                                    <h2>Nuevos Clientes</h2>
                                    <div class="section-content">
                                        <p>
                                            Para crear una cuenta, haga clic en el botón de abajo y complete el formulario de registro.
                                        </p>
                                        <a class="btn btn-primary"
                                            href="{{ route('register') }}"
                                            data-link-action="display-register-form">
                                            Crea tu cuenta
                                        </a>
                                    </div>
                                </div>

                                <div class="login-section col-xs-12 col-sm-6">
                                    <h2>Iniciar sesión</h2>
                                    <section class="login-form">
                                        {{-- errors --}}
                                        @if (session('error'))
                                            <div class="help-block">
                                                <ul>
                                                    <li class="alert alert-danger">
                                                        Datos de acceso incorrectos
                                                    </li>
                                                </ul>
                                            </div>
                                        @endif

                                        <form id="login-form" action="{{ route('login') }}" method="post">
                                            @csrf
                                            <section>
                                                <input type="hidden" name="back" value="" />
                                                <div class="form-group row">
                                                    <div class="col-md-8">
                                                        <div class="relative">
                                                            <div class="relative"
                                                                [class]="formErrors.errors.email ? 'relative field-error' : 'relative'">
                                                                <div class="icon-true">
                                                                    <input name="email" class="form-control"
                                                                        value="" type="email"
                                                                        placeholder="Ingrese su correo" required />
                                                                    <span class="focus-border"><i></i></span>
                                                                    <svg class="svgic input-icon">
                                                                        <use href="{{asset('template/images/lib.svg#email')}}">
                                                                        </use>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="form-control-error-comment"
                                                                [text]="formErrors.errors.email ? formErrors.errors.email : ''"
                                                                hidden [hidden]="!formErrors.errors.email"></div>
                                                            <div class="form-control-comment"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-8">
                                                        <div class="relative">
                                                            <div class="input-group-dis js-parent-focus"
                                                                [class]="formErrors.errors.password ? 'input-group-dis js-parent-focus field-error' : 'input-group-dis js-parent-focus'">
                                                                <div class="icon-true relative">
                                                                    <input
                                                                        class="form-control js-child-focus js-visible-password"
                                                                        name="password" type="password"
                                                                        placeholder="Ingrese su contraseña" value=""
                                                                        pattern=".{5,}" required />
                                                                    <span class="focus-border"><i></i></span>

                                                                    <svg class="svgic input-icon">
                                                                        <use
                                                                            href="{{asset('template/images/lib.svg#password')}}">
                                                                        </use>
                                                                    </svg>
                                                                </div>
                                                                <span class="input-group-btn" style="display: none">
                                                                    <button class="btn" type="button"
                                                                        data-action="show-password" data-text-show="Show"
                                                                        data-text-hide="Hide">
                                                                        Show
                                                                    </button>
                                                                </span>
                                                            </div>
                                                            <div class="form-control-error-comment"
                                                                [text]="formErrors.errors.password ? formErrors.errors.password : ''"
                                                                hidden [hidden]="!formErrors.errors.password"></div>
                                                            <div class="form-control-comment"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="forgot-password flex-container">
                                                    <input type="hidden" name="submitLogin" value="1" />
                                                    <a href="{{ route('reset_password') }}" rel="nofollow"
                                                        style="flex-grow: 1">
                                                        ¿Olvidaste tu contraseña?
                                                    </a>
                                                    &nbsp;
                                                    <button class="btn btn-primary form-control-submit"
                                                        data-link-action="sign-in" type="submit">
                                                        Iniciar sesión
                                                    </button>
                                                </div>
                                            </section>
                                        </form>
                                    </section>
                                </div>
                            </div>
                        </section>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content_script')
<script src="{{ asset('template/js/bottom-695441840.js') }}"></script>
@endsection
