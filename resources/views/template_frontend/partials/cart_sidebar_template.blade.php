<template id="cart-sidebar-template">
    <aside class="pk-aside pk-right pk-el-cart" data-pktabcontent="el-cart" data-pktabgroup="el-cart">
        <header class="flex-container align-items-center">
            <h3 class="flex-grow1">Carrito de Compras</h3>
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
                <div id="desktop_cart">
                    <div class="blockcart cart-preview inactive"
                        data-refresh-url="//alysum.promokit.eu/en/module/ps_shoppingcart/ajax">
                        <div class="header relative flex-container flex-column">
                            <a rel="nofollow" href="cart75f4.html?action=show"
                                class="flex-container align-items-center relative cart-icon pk-item-content"
                                aria-label="Shopping cart link containing 0 product(s)">
                                <svg class="svgic svgic-button-cart">
                                    <use href="{{ asset('template/images/lib.svg#cart') }}"></use>
                                </svg> <span class="cart-title pkhi-item-title">Mi carrito</span>
                            </a>
                            <div class="pk-notification flex-container information empty_shopping_cart" role="alert">
                                <svg class="svgic ">
                                    <use href="{{ asset('template/images/lib.svg#information') }}"></use>
                                </svg> <span class="flex-grow1">No hay productos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</template>
