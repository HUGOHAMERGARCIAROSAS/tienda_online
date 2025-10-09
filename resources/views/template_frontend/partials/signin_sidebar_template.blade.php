<template id="signin-sidebar-template">
    <aside class="pk-aside pk-right pk-el-signin" data-pktabcontent="el-signin" data-pktabgroup="el-signin">
        <header class="flex-container align-items-center">
            <h3 class="flex-grow1">Iniciar Sesión</h3>
            <button class="close-sidebar clear-btn" aria-label="Close Sidebar">
                <svg class="svgic">
                    <use href="{{ asset('template/images/lib.svg#cross-thin') }}"></use>
                </svg>
            </button>
        </header>
        <div class="pk-aside-tabs">
            <div class="pktabswrap">
                <ul class="flex-container justify-content-center list-unstyled pktabswrap-ul" role="tablist">
                </ul>
            </div>
            <div class="tab-content">
            </div>
        </div>
    </aside>
    <div class="tabs">
        <li role="tab">
            <a class="smooth02" data-pktabname="signin" data-pktabgroup="el-signin-inner" data-pktype="sidebar"
                href="#" title="Sign In">
                Iniciar Sesión
            </a>
        </li>
        <li role="tab">
            <a class="smooth02" data-pktabname="register" data-pktabgroup="el-signin-inner" data-pktype="sidebar"
                href="#" title="Register">
                Registrarse
            </a>
        </li>
    </div>
    <div class="tabsContent">
        <div class="tab-pane" data-pktabcontent="signin" data-pktabgroup="el-signin-inner" role="tabpanel">
            <div class="pk-aside-body products grid-container js-tab-signin prodnum">
                <form class="customer-form active" data-pktabcontent="signin" data-pktabgroup="pkhiloginfom"
                    method="post" action="{{ route('login') }}">
                    @csrf
                    <input type="hidden" name="submitLogin" value="1">
                    <div class="relative">
                        <div class="icon-true">
                            <input autocomplete="off" class="form-control" name="email" type="email" value="client@gmail.com"
                                placeholder="Email" required="">
                            <span class="focus-border"><i></i></span>
                            <svg class="svgic input-icon maincolor">
                                <use href="{{ asset('template/images/lib.svg#email') }}"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="icon-true">
                            <input autocomplete="off" class="form-control" name="password" type="password"
                                value="123456" placeholder="Password" required="">
                            <span class="focus-border"><i></i></span>
                            <svg class="svgic input-icon maincolor">
                                <use href="{{ asset('template/images/lib.svg#password') }}"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="forgot-password flex-container align-items-top">
                        <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                            Iniciar Sesión
                        </button>
                        &nbsp;
                    </div>
                    <a href="password-recovery.html" rel="nofollow">
                        ¿Has olvidado tu contraseña?
                    </a>
                </form>
            </div>
        </div>
        <div class="tab-pane" data-pktabcontent="register" data-pktabgroup="el-signin-inner" role="tabpanel">
            <div class="pk-aside-body products grid-container js-tab-register prodnum">
                <div class="customer-form-container">
                    <form class="customer-form" method="post" data-pktabcontent="register"
                        data-pktabgroup="pkhiloginfom"
                        action="{{ route('register') }}">
                        @csrf
                        <div class="relative">
                            <div class="icon-true">
                                <input autocomplete="off" class="form-control" name="email" type="email"
                                    value="" placeholder="Email" required="">
                                <span class="focus-border"><i></i></span>
                                <svg class="svgic input-icon maincolor">
                                    <use href="{{ asset('template/images/lib.svg#email') }}"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="icon-true">
                                <input autocomplete="off" class="form-control" name="name" type="text"
                                    value="" placeholder="First Name" required="">
                                <span class="focus-border"><i></i></span>
                                <svg class="svgic input-icon maincolor">
                                    <use href="{{ asset('template/images/lib.svg#account') }}"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="icon-true">
                                <input autocomplete="off" class="form-control" name="password" type="password"
                                    value="" placeholder="Password" required="">
                                <span class="focus-border"><i></i></span>
                                <svg class="svgic input-icon maincolor">
                                    <use href="{{ asset('template/images/lib.svg#password') }}"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="icon-true">
                                <input autocomplete="off" class="form-control" name="password_confirmation"
                                    type="password" value="" placeholder="Confirm Password" required="">
                                <span class="focus-border"><i></i></span>
                                <svg class="svgic input-icon maincolor">
                                    <use href="{{ asset('template/images/lib.svg#password') }}"></use>
                                </svg>
                            </div>
                        </div>
                        <button class="btn btn-primary form-control-submit register-button" type="submit"
                            data-back="https://alysum.promokit.eu/en/identity">
                            Registrarse
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
