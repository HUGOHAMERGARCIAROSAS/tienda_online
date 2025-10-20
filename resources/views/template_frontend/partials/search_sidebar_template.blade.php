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
                    <form method="get" action="#"
                        data-original-action="#" class="relative">
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
<style>
    .pk-el-pknav {
        max-height: 100vh;
        overflow-y: auto;
        overflow-x: hidden;
    }

</style>
<template id="search-sidebar-template">
    <aside class="pk-aside pk-right pk-el-pknav" data-pktabcontent="el-pknav" data-pktabgroup="el-pknav">
        <header class="flex-container align-items-center">
            <h3 class="flex-grow1">Menu</h3>
            <button class="close-sidebar clear-btn" aria-label="Close Sidebar">
                <svg class="svgic">
                    <use href="{{ asset('template/images/lib.svg#cross-thin') }}"></use>
                </svg>
            </button>
        </header>
        <div class="pk-aside-tabs" >
            <div class="pktabswrap">
                <ul class="flex-container justify-content-center list-unstyled pktabswrap-ul" role="tablist">
                    <li role="tab">
                        <a class="smooth02" data-pktabname="el-home" data-pktabgroup="el-pknav-inner" style="padding: 10px 5px;"
                            data-pktype="sidebar" href="#" title="Home">
                            Inicio
                        </a>
                    </li>
                    <li role="tab">
                        <a class="smooth02" data-pktabname="el-search" data-pktabgroup="el-pknav-inner" style="padding: 10px 5px;"
                            data-pktype="sidebar" href="{{ route('frontend.categories') }}" title="Categorias">
                            Categorías
                        </a>
                        <ul class="sub-menu list-unstyled">
                            @foreach ($categories as $category)
                                <li role="tab">
                                    <a class="smooth02" data-pktabname="el-search" data-pktabgroup="el-pknav-inner" style="padding: 10px 5px;"
                                        data-pktype="sidebar" href="{{ route('frontend.categories.show', $category->slug) }}" title="Categorias">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
</template>

