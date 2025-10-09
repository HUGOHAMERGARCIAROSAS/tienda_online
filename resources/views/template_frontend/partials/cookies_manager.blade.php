<div class="pk-fixed-bottom pk-fixed-bottom-right flex-container fixed cp justify-content-left">
    <button class="pk-fixed-button pk-cookie-toggler" aria-label="Cookies Manager">
        <svg class="svgic">
            <use href="{{ asset('template/images/lib.svg#cookie') }}"></use>
        </svg>
    </button> 
    <button class="pk-fixed-button pk-scroll-totop fixed" tabindex="0" aria-label="Scroll to Top">
        <svg class="svgic">
            <use href="{{ asset('template/images/lib.svg#top-arrow-thin') }}"></use>
        </svg>
    </button>
    <button class="pk-fixed-button pk-cart-button relative" tabindex="0" data-pktabname="el-cart"
        data-pktabgroup="el-cart" data-pktype="sidebar" aria-label="Shopping Cart">
        <svg class="svgic">
            <use href="{{ asset('template/images/lib.svg#cart') }}"></use>
        </svg> <span class="cart-products-count cart-counter absolute" data-productsnum="0">0</span>
    </button>
</div>
