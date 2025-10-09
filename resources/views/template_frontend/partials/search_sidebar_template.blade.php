<template id="search-sidebar-template">
    <aside class="pk-aside pk-right pk-el-search" data-pktabcontent="el-search" data-pktabgroup="el-search">
        <header class="flex-container align-items-center">
            <h3 class="flex-grow1">Buscar</h3>
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
                <div class="pk-search-widget flex-container categories-outside" data-page="1">
                    <form method="get" action="https://alysum.promokit.eu/en/module/pkelements/search"
                        data-original-action="https://alysum.promokit.eu/en/search" class="relative">
                        <fieldset class="flex-container align-items-center">
                            <legend>Buscar</legend>
                            <div class="relative inner-search-button flex-container">
                                <input type="search" name="s" value="" class="search-popup hidden"
                                    placeholder="Buscar..." aria-label="Search">
                                <button type="submit" class="flex-container justify-content-center align-items-center"
                                    aria-label="Search" data-pktabname="el-search" data-pktabgroup="el-search"
                                    data-pktype="sidebar">
                                    <svg class="svgic svg-loader in_progress">
                                        <use href="{{ asset('template/images/lib.svg#loading') }}"></use>
                                    </svg> <svg class="svgic svg-search">
                                        <use href="{{ asset('template/images/lib.svg#search') }}"></use>
                                    </svg>
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </aside>
</template>
