<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MJGLAM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-style-mode" content="1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('mj_glam_logo.png') }}">
    @yield('styles_css')
</head>

<body class="body-area">
    @include('admin.layouts.loading')
    <div class="page">
        @include('admin.layouts.sidebar')
        @include('admin.layouts.header')

        <div class="app-content-area">
            @yield('content')
        </div>

        @include('admin.layouts.footer')

        @include('admin.layouts.search_modal')

    </div>
    @include('admin.layouts.progress_wrap')
    @include('admin.layouts.theme_switcher')

    @yield('scripts_js')
</body>
</html>
