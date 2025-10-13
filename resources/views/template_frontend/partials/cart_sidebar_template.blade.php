<template id="cart-sidebar-template" >
    <aside class="pk-aside pk-right pk-el-cart" id="cartSidebar" data-pktabcontent="el-cart" data-pktabgroup="el-cart">
        <header class="flex-container align-items-center">
            <h3 class="flex-grow1">Carrito de Compras</h3>
            <button class="close-sidebar clear-btn" aria-label="Close Sidebar">
                <svg class="svgic">
                    <use href="{{ asset('template/images/lib.svg#cross-thin') }}"></use>
                </svg>
            </button>
        </header>
        <div class="pk-aside-tabs">
            {{-- <div class="pktabswrap">
                <ul class="flex-container justify-content-center list-unstyled pktabswrap-ul" role="tablist">
                </ul>
            </div> --}}
            <div class="tab-content">
                <div id="desktop_cart">
                    <div class="blockcart cart-preview inactive">
                        <div class="header relative flex-container flex-column">
                            <a rel="nofollow" href="cart.html"
                                class="flex-container align-items-center relative cart-icon pk-item-content"
                                aria-label="Shopping cart link containing 0 product(s)">
                                <svg class="svgic svgic-button-cart">
                                    <use href="{{ asset('template/images/lib.svg#cart') }}"></use>
                                </svg>
                                <span class="cart-title pkhi-item-title">Mi carrito</span>
                            </a>
                            <div class="cart-items"></div>
                            <div class="cart-footer">
                                <p class="cart-total">Total: <span id="cart-total">S/ 0.00</span></p>
                                <a href="{{ route('frontend.cart') }}" class="btn btn-primary w-100 mt-2">Ir a pagar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</template>
