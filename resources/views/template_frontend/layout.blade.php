<!doctype html>
<html lang="es-ES" data-overlayscrollbars-initialize style="padding-right: 0px!important;">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    @include('template_frontend.styles')
    @include('template_frontend.scripts')
    
</head>
<body id="index"
    class="lang-en country-us currency-usd layout-full-width page-index tax-display-enabled pm-details-layout1 category-page-width-fixed"
    data-overlayscrollbars-initialize>

    @include('template_frontend.header')

    <main id="main-content">
        @yield('content')
    </main>

    @include('template_frontend.footer')

    @include('template_frontend.scripts2')

    @include('template_frontend.partials.cookies_manager')

    @include('template_frontend.partials.message')

    @include('template_frontend.partials.search_sidebar_template')

    @include('template_frontend.partials.myaccount_sidebar_template')

    @include('template_frontend.partials.cart_sidebar_template')

    @include('template_frontend.partials.watchlist_sidebar_template')

    @include('template_frontend.partials.favorites_sidebar_template')

    @include('template_frontend.partials.signin_sidebar_template')

    @include('template_frontend.partials.compare_sidebar_template')

    @include('template_frontend.partials.favorites_single_sidebar_template')

    @include('template_frontend.partials.menu_mobile')

    <div class="pk-shadow" aria-hidden="true"></div>

    @include('template_frontend.partials.aside_front_panel')

    @include('template_frontend.partials.password_feedback')


    
    

</body>

</html>
