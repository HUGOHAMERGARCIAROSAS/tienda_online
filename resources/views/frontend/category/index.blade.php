@extends('template_frontend.layout')
@section('content_style')
    <link rel="stylesheet" href="{{ asset('template/css/theme-6825b4844.css') }}" media="all">
    <style>
        .thumbnail.product-thumbnail {
            width: 100%;
            height: 300px;
            overflow: hidden;
            position: relative;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .thumbnail.product-thumbnail  img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
    </style>
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
                    <a href="#"> <span>Categorías</span>
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
                        <h3 class="h1">MJ GLAM - Categorías</h3>
                    </header>
                     <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        @foreach ($categories as $category)
                                            <div class="col-md-3" style="margin-bottom: 20px;">
                                                <div class="thumbnail product-thumbnail" style="margin-bottom:0;">
                                                    <a href="{{ route('frontend.categories.show', $category->slug) }}">
                                                        <picture>
                                                            <source srcset="{{ asset($category->url) }}" type="image/webp">
                                                            <img src="{{ asset($category->url) }}"
                                                                alt="{{ $category->name }}" loading="lazy"
                                                                data-image-large-src="{{ asset($category->url) }}"
                                                                data-image-medium-src="{{ asset($category->url) }}"
                                                                class="thumb js-thumb db smooth02 selected js-thumb-selected db w-100"
                                                                data-image-large-sources="{&quot;jpg&quot;:&quot;https:\/\/alysum.promokit.eu\/434-large_default\/printed-summer-dress.jpg&quot;,&quot;webp&quot;:&quot;https:\/\/alysum.promokit.eu\/434-large_default\/printed-summer-dress.webp&quot;}"
                                                                data-image-medium-sources="{&quot;jpg&quot;:&quot;https:\/\/alysum.promokit.eu\/434-medium_default\/printed-summer-dress.jpg&quot;,&quot;webp&quot;:&quot;https:\/\/alysum.promokit.eu\/434-medium_default\/printed-summer-dress.webp&quot;}">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="caption">
                                                    <h6 style="margin: 0!important; font-family: 'Roboto', sans-serif;" class="text-center">
                                                        <a href="{{ route('frontend.categories.show', $category->slug) }}" >{{ $category->name }}</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content_script')
    <script src="{{ asset('template/js/bottom-38a1a7843.js') }}"></script>
@endsection
