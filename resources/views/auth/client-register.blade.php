@extends('template_frontend.layout')
@section('content')
    <div class="page-width top-content">
        <nav data-depth="2" class="breadcrumb">
            <ol>
                <li>
                    <a href="{{ url('/') }}"> <span>Inicio</span> </a>
                </li>
                <li>
                    <span>Crea tu cuenta</span>
                </li>
            </ol>
        </nav>
    </div>
    <div class="page-width main-content">
        <div id="wrapper" class="clearfix container">
            <div class="row">
                <div id="content-wrapper" class="content-wrapper">
                    <section id="main">
                        <header class="page-header">
                            <h1>Crea tu cuenta</h1>
                        </header>
                        <section id="content" class="page-content card card-block">
                            <section class="register-form">
                                <p>
                                    Si ya tiene una cuenta con nosotros,
                                    <a href="{{ route('login') }}"> inicie sesión</a>
                                </p>
                                <form action="{{ route('register') }}" id="customer-form"
                                    class="js-customer-form" method="post">
                                    @csrf
                                    <section class="">
                                        <div class="form-group row">
                                            <label class="col-md-4 form-control-label required">
                                                Nombres
                                            </label>
                                            <div class="col-md-8">
                                                <div class="relative">
                                                    <div class="relative"
                                                        [class]="formErrors.errors.firstname ? 'relative field-error' : 'relative'">
                                                        <div class="icon-true">
                                                            <input name="name" class="form-control" value=""
                                                                type="text" placeholder="Nombres" required />
                                                            <span class="focus-border"><i></i></span>

                                                            <svg class="svgic input-icon">
                                                                <use href="{{ asset('template/images/lib.svg#account')}}"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="form-control-error-comment"
                                                        [text]="formErrors.errors.firstname ? formErrors.errors.firstname : ''"
                                                        hidden [hidden]="!formErrors.errors.firstname"></div>
                                                    <span class="form-control-comment">Solo letras y el punto (.) caracter, seguido de un espacio</span>

                                                    <div class="form-control-comment"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 form-control-label required">
                                                Email
                                            </label>
                                            <div class="col-md-8">
                                                <div class="relative">
                                                    <div class="relative"
                                                        [class]="formErrors.errors.email ? 'relative field-error' : 'relative'">
                                                        <input name="email" class="form-control" value=""
                                                            type="email" placeholder="Email" required />
                                                        <span class="focus-border"><i></i></span>
                                                    </div>
                                                    <div class="form-control-error-comment"
                                                        [text]="formErrors.errors.email ? formErrors.errors.email : ''"
                                                        hidden [hidden]="!formErrors.errors.email"></div>

                                                    <div class="form-control-comment"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-4 form-control-label required">
                                                Contraseña
                                            </label>
                                            <div class="col-md-8">
                                                <div class="relative">
                                                    <div class="input-group-dis js-parent-focus"
                                                        [class]="formErrors.errors.password ? 'input-group-dis js-parent-focus field-error' : 'input-group-dis js-parent-focus'">
                                                        <input class="form-control js-child-focus js-visible-password"
                                                            name="password" type="password" placeholder="Password"
                                                            value="" pattern=".{5,}" required />
                                                        <span class="focus-border"><i></i></span>
                                                        <span class="input-group-btn" style="display: none">
                                                            <button class="btn" type="button"
                                                                data-action="show-password" data-text-show="Show"
                                                                data-text-hide="Hide">
                                                                Mostrar
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
                                        <div class="form-group row">
                                            <label class="col-md-4 form-control-label required">
                                                Confirmar Contraseña
                                            </label>
                                            <div class="col-md-8">
                                                <div class="relative">
                                                    <div class="input-group-dis js-parent-focus"
                                                        [class]="formErrors.errors.password_confirmation ? 'input-group-dis js-parent-focus field-error' : 'input-group-dis js-parent-focus'">
                                                        <input class="form-control js-child-focus js-visible-password"
                                                            name="password_confirmation" type="password"
                                                            placeholder="Confirmar Password" value="" pattern=".{5,}"
                                                            required />
                                                        <span class="focus-border"><i></i></span>
                                                        <span class="input-group-btn" style="display: none">
                                                            <button class="btn" type="button"
                                                                data-action="show-password" data-text-show="Show"
                                                                data-text-hide="Hide">
                                                                Mostrar
                                                            </button>
                                                        </span>
                                                    </div>
                                                    <div class="form-control-error-comment"
                                                        [text]="formErrors.errors.password_confirmation ? formErrors.errors.password_confirmation : ''"
                                                        hidden [hidden]="!formErrors.errors.password_confirmation"></div>

                                                    <div class="form-control-comment"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <footer class="form-footer clearfix">
                                        <input type="hidden" name="submitCreate" value="1" />

                                        <button class="btn btn-primary form-control-submit pull-xs-right"
                                            data-link-action="save-customer" type="submit">
                                            Registrarse
                                        </button>
                                    </footer>
                                </form>
                            </section>
                        </section>

                        <footer class="page-footer">
                            <!-- Footer content -->
                        </footer>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
