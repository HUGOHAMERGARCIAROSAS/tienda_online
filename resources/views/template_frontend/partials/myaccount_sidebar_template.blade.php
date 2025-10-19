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
                <ul class="opt-list sidebar-ul">
                    <li class="smooth02 relative">
                        <a href="#" title="Mi cuenta">Mi cuenta</a>
                    </li>
                    <li class="smooth02 relative">
                        <a href="#" title="Identity">Mis Favoritos</a>
                    </li>
                    <li class="smooth02 relative">
                        <a href="#" title="Add first address">Mi lista de deseos</a>
                    </li>
                    <li class="smooth02 relative">
                        <a href="#" title="Credit slips">Mis Pedidos</a>
                    </li>
                </ul>
                <br>
                <a class="btn btn-primary" href="#">Mi Cuenta</a>
            </div>
        </div>
    </aside>
</template>
