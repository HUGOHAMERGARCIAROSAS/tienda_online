@extends('template_frontend.layout')
@section('content_style')
    <link rel="stylesheet" href="{{ asset('template/css/theme-3e033e842.css') }}" media="all">
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
        <nav data-depth="3" class="breadcrumb">
            <ol>
                <li>
                    <a href="{{ url('/') }}"> <span>Inicio</span> </a>
                </li>
                <li>
                    <a href="{{ route('frontend.categories') }}">
                        <span>Categorías</span>
                    </a>
                </li>
                <li>
                    <span>{{ $category->name }}</span>
                </li>
            </ol>
        </nav>
    </div>

    <div data-elementor-type="page" data-elementor-id="124010000"
        class="elementor elementor-124010000 elementor-bc-flex-widget" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <div class="elementor-element elementor-element-yhj6gy3 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                    data-id="yhj6gy3" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-mqn07lp elementor-column elementor-col-100 elementor-top-column"
                                data-id="mqn07lp" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-f8b3b98 elementor-widget elementor-widget-pkcategoryproducts"
                                            data-id="f8b3b98" data-element_type="widget"
                                            data-widget_type="pkcategoryproducts.default">
                                            <div class="elementor-widget-container">
                                                <section id="main">
                                                    <div id="products" class="view_grid view_grid1">
                                                        <div class="product_list_top">
                                                            <div id="js-product-list-top"
                                                                class="products-selection flex-container flex-wrap">
                                                                <button class="btn pk-filter-button hidden"
                                                                    data-trigger-name="filter-wrapper">
                                                                    Filtros
                                                                    <svg class="svgic">
                                                                        <use
                                                                            href="{{ asset('template/images/lib.svg#filter') }}">
                                                                        </use>
                                                                    </svg>
                                                                </button>

                                                                <div class="listing_view flex-container">
                                                                    <div class="view_btn smooth02" id="view_magic"
                                                                        data-gridcols="1" title="Grid Auto Mode"
                                                                        tabindex="0" role="button"
                                                                        aria-pressed="false">
                                                                        <svg class="svgic smooth02 svgic-magic">
                                                                            <use
                                                                                href="{{ asset('template/images/lib.svg#magic')}}">
                                                                            </use>
                                                                        </svg>
                                                                    </div>

                                                                    <div class="view_btn smooth02" id="view_grid2"
                                                                        data-gridcols="2" title="Grid 2 columns"
                                                                        tabindex="0" role="button"
                                                                        aria-pressed="false">
                                                                        <svg class="svgic smooth02 svgic-grid2">
                                                                            <use
                                                                                href="{{ asset('template/images/lib.svg#grid2')}}">
                                                                            </use>
                                                                        </svg>
                                                                    </div>

                                                                    <div class="view_btn smooth02" id="view_grid3"
                                                                        data-gridcols="3" title="Grid 3 columns"
                                                                        tabindex="0" role="button"
                                                                        aria-pressed="false">
                                                                        <svg class="svgic smooth02 svgic-grid3">
                                                                            <use
                                                                                href="{{ asset('template/images/lib.svg#grid3')}}">
                                                                            </use>
                                                                        </svg>
                                                                    </div>

                                                                    <div class="view_btn smooth02" id="view_grid4"
                                                                        data-gridcols="4" title="Grid 4 columns"
                                                                        tabindex="0" role="button"
                                                                        aria-pressed="false">
                                                                        <svg class="svgic smooth02 svgic-grid4">
                                                                            <use
                                                                                href="{{ asset('template/images/lib.svg#grid4')}}">
                                                                            </use>
                                                                        </svg>
                                                                    </div>

                                                                    <div class="view_btn smooth02 active" id="view_grid5"
                                                                        data-gridcols="5" title="Grid 5 columns"
                                                                        tabindex="0" role="button"
                                                                        aria-pressed="false">
                                                                        <svg class="svgic smooth02 svgic-grid5">
                                                                            <use
                                                                                href="{{ asset('template/images/lib.svg#grid5')}}">
                                                                            </use>
                                                                        </svg>
                                                                    </div>

                                                                    <div class="view_btn smooth02" id="view_grid6"
                                                                        data-gridcols="6" title="Grid 6 columns"
                                                                        tabindex="0" role="button"
                                                                        aria-pressed="false">
                                                                        <svg class="svgic smooth02 svgic-grid6">
                                                                            <use
                                                                                href="{{ asset('template/images/lib.svg#grid6')}}">
                                                                            </use>
                                                                        </svg>
                                                                    </div>

                                                                    <div class="view_btn smooth02" id="view_list"
                                                                        data-gridcols="0" title="List" tabindex="0"
                                                                        role="button" aria-pressed="false">
                                                                        <svg class="svgic smooth02 svgic-list">
                                                                            <use
                                                                                href="{{ asset('template/images/lib.svg#list')}}">
                                                                            </use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product_list">
                                                            <div id="js-product-list">
                                                                @if($products->count() > 0)
                                                                <div class="product-list-container grid-container">
                                                                    @foreach ($products as $product)
                                                                        <article
                                                                            class="product-miniature js-product-miniature js-product new women"
                                                                            data-id-product="1" data-id-product-attribute="1">
                                                                            <div class="thumbnail-container relative">
                                                                                <div
                                                                                    class="thumbnail product-thumbnail relative flex-container">
                                                                                    <a href="{{ route('frontend.product.show', ['slug' => $product->slug]) }}"
                                                                                        class="relative oh db subimage-true">
                                                                                        <picture class="cover-image smooth02">
                                                                                            <source srcset="{{ asset($product->url) }}"
                                                                                                type="image/webp" />
                                                                                            <img src="{{ asset($product->url) }}"
                                                                                                width="380" height="494"
                                                                                                alt="{{ $product->name}}"
                                                                                                loading="lazy"
                                                                                                data-image-large-src="{{asset($product->url)}}"
                                                                                                data-image-medium-src="{{asset($product->url)}}"
                                                                                                class="db w-100" />
                                                                                        </picture>

                                                                                        <span
                                                                                            class="pmimage-switcher flex-container">
                                                                                            <span
                                                                                                class="relative db flex-grow1"></span>
                                                                                            <span
                                                                                                class="relative db flex-grow1"></span>
                                                                                            <span
                                                                                                class="relative db flex-grow1"></span>
                                                                                        </span>
                                                                                    </a>

                                                                                    <div class="product-actions show-on-hover scale-on-hover">
                                                                                        <button class="btn btn-primary add-to-cart"
                                                                                            title="Agregar al Carrito"
                                                                                            type="button" onclick="addToCart({{ $product->id }})">
                                                                                            <svg class="svgic">
                                                                                                <use
                                                                                                    href="{{ asset('template/images/lib.svg#cart') }}">
                                                                                                </use>
                                                                                            </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="product-desc-wrap">
                                                                                    <div
                                                                                        class="product-description relative clearfix">
                                                                                        <h2 class="product-title text-left">
                                                                                            <a
                                                                                                href="{{ route('frontend.product.show', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                                                                        </h2>

                                                                                        <div
                                                                                            class="product-price-and-shipping">
                                                                                            <span class="price"
                                                                                                content="{{ $product->price }}">S/ {{ $product->price }}</span>
                                                                                        </div>

                                                                                        <div
                                                                                            class="short-desc product-description-short pm_desk_false hidden">
                                                                                            <p>
                                                                                                {{ $product->description }}
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    @endforeach

                                                                </div>
                                                                @else
                                                                    <p>No hay productos en esta categoria</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div id="js-product-list-bottom"></div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
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
<script src="{{ asset('template/js/bottom-4027fc841.js') }}"></script>
@endsection
