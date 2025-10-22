<template id="myaccount-sidebar-template">
    <aside class="pk-aside pk-right pk-el-myaccount" data-pktabcontent="el-myaccount" data-pktabgroup="el-myaccount">
        <header class="flex-container align-items-center">
            <h3 class="flex-grow1">Mi Cuenta</h3>
            <button class="close-sidebar clear-btn" aria-label="Close Sidebar">
                <svg class="svgic">
                    <use href="{{ asset('template/images/lib.svg#cross-thin') }}"></use>
                </svg> </button>
        </header>
        <div class="pk-aside-tabs">
            <div class="pktabswrap">
                <ul class="flex-container justify-content-center list-unstyled pktabswrap-ul" role="tablist">
                </ul>
            </div>
            <div class="tab-content">
                @if(Auth::check())
                <ul class="opt-list sidebar-ul">
                    <li class="smooth02 relative">
                        <a href="{{ route('frontend.mi_cuenta') }}" title="Mi cuenta">Mi cuenta</a>
                    </li>
                    <li class="smooth02 relative">
                        <a href="{{ route('frontend.mis_pedidos') }}" title="Credit slips">Mis Pedidos</a>
                    </li>
                </ul>
                <br>
                @else
                <a class="btn btn-primary" href="{{ route('login') }}">Iniciar Sesión</a>
                @endif
            </div>
        </div>
    </aside>
</template>
