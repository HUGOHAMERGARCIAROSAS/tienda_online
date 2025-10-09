<template id="favorites_single-sidebar-template">

        <aside class="pk-aside pk-right pk-el-favorites_single" data-pktabcontent="el-favorites_single"
            data-pktabgroup="el-favorites_single">

            <header class="flex-container align-items-center">
                <h3 class="flex-grow1">My Favorites</h3>
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





                    <div class="pk-notification flex-container information no-results" role="alert">
                        <svg class="svgic ">
                            <use href="{{ asset('template/images/lib.svg#information') }}"></use>
                        </svg> <span class="flex-grow1">No Products</span>
                    </div>



                </div>
            </div>
        </aside>
    </template>