<template id="compare-sidebar-template">
    <aside class="pk-aside pk-right pk-el-products wide-sidebar" data-pktabcontent="el-products"
        data-pktabgroup="el-products">
        <header class="flex-container align-items-center">
            <h3 class="flex-grow1">Mis Productos</h3>
            <button class="close-sidebar clear-btn" aria-label="Close Sidebar">
                <svg class="svgic wide-sidebar">
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
            <a class="smooth02" data-pktabname="el-compare" data-pktabgroup="el-products-inner" data-pktype="sidebar"
                href="#" title="Compare">
                Comparar
            </a>
        </li>
    </div>
    <div class="tabsContent">
        <div class="tab-pane" data-pktabcontent="el-compare" data-pktabgroup="el-products-inner" role="tabpanel">
            <div class="pk-aside-body products grid-container js-tab-el-compare prodnum0">
                <div class="pk-notification flex-container information no-results" role="alert">
                    <svg class="svgic ">
                        <use href="{{ asset('template/images/lib.svg#information') }}"></use>
                    </svg> <span class="flex-grow1">No hay productos</span>
                </div>
            </div>
            <a href="comparison.html" class="btn compare-products">
                Comparar Productos
            </a>
        </div>
    </div>
</template>
