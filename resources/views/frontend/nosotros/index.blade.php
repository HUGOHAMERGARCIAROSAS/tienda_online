@extends('template_frontend.layout')
@section('content_style')
    <link rel="stylesheet" href="{{ asset('template/css/theme-6825b4844.css') }}" media="all">
@endsection
@section('content')
    <div class="page-width top-content">
        <nav data-depth="4" class="breadcrumb">
            <ol>
                <li>
                    <a href="{{ url('/') }}"> <span>Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="#"> <span>Nosotros</span>
                    </a>
                </li>
            </ol>
        </nav>
    </div>
    <div class="page-width main-content">
        <div id="wrapper" class="clearfix container">
            <div class="row">
                <div id="content-wrapper" class="wide left-column col-xs-12 col-sm-12 col-md-12">
                    <header class="page-header">
                        <h1 class="h1">MJ GLAM</h1>
                    </header>
                    <div class="simpleblog__post">
                        <div class="simpleblog__post__content">

                            <img src="{{$setting->url}}" class="db">
                        </div>
                        <p>
                            {!! $setting->descripcion !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content_script')
    <script src="{{ asset('template/js/bottom-38a1a7843.js') }}"></script>
@endsection
