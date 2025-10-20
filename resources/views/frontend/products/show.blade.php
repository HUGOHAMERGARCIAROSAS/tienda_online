@extends('template_frontend.layout')
@section('content_style')
    <link rel="stylesheet" href="{{ asset('template/css/theme-5c3030842.css') }}" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .product-swiper {
            width: 100%;
            max-height: 85vh;
        }
        .product-swiper img {
            object-fit: contain;
            border-radius: 10px;
        }
        .modal-backdrop {
            z-index: 1050 !important;
        }
        .modal {
            z-index: 1100 !important;
        }
        
    </style>
@endsection
@section('content')
    <div class="page-width top-content">
        <nav data-depth="3" class="breadcrumb">
            <ol>
                <li>
                    <a href="{{ url('/') }}"> <span>Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('frontend.categories.show', ['slug' => $category->slug]) }}">
                        <span>{{ $category->name }}</span>
                    </a>
                </li>
                <li>
                    <span>{{ $product->name }}</span>
                </li>
            </ol>
        </nav>
    </div>
    <div class="page-width main-content">
        <div id="wrapper" class="clearfix container">
            <div class="row">
                <div id="content-wrapper" class="content-wrapper">
                    <section id="main" data-id_product_attribute="31" data-id_product="6">
                        <div class="row product-container product-page-col page-width">
                            <div class="col-md-6">
                                <section class="page-content" id="content">
                                    @if($product->is_new)
                                    <ul class="product-flags js-product-flags">
                                        <li class="product-flag new">Nuevo</li>
                                    </ul>
                                    @endif
                                    <div class="images-container flex-container thumb-vertical" id="product-images-cont">
                                        <div class="elementor-element elementor-slick-slider vertical-thumbnails thumb-carousel">
                                            <ul class="pk-slick-carousel"
                                                data-slider_options={"slidesToShow":4,"vertical":true}>
                                                @foreach ($product_images as $key => $image)    
                                                    <li class="thumb-container js-thumb-container">
                                                        <picture>
                                                            <source srcset="{{ asset($image->url) }}" type="image/webp">
                                                            <img src="{{ asset($image->url) }}" width="500" height="650"
                                                                alt="{{ $product->name }}" loading="lazy"
                                                                data-image-large-src="{{ asset($image->url) }}"
                                                                data-image-medium-src="{{ asset($image->url) }}"
                                                                class="thumb js-thumb db smooth02 selected js-thumb-selected db w-100"
                                                                data-image-large-sources="{&quot;jpg&quot;:&quot;https:\/\/alysum.promokit.eu\/434-large_default\/printed-summer-dress.jpg&quot;,&quot;webp&quot;:&quot;https:\/\/alysum.promokit.eu\/434-large_default\/printed-summer-dress.webp&quot;}"
                                                                data-image-medium-sources="{&quot;jpg&quot;:&quot;https:\/\/alysum.promokit.eu\/434-medium_default\/printed-summer-dress.jpg&quot;,&quot;webp&quot;:&quot;https:\/\/alysum.promokit.eu\/434-medium_default\/printed-summer-dress.webp&quot;}">
                                                        </picture>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="main-image-container js-images-container">
                                            <div class="product-cover relative">
                                                <div class="smooth500 cp" data-width="500" data-height="650">
                                                    <picture>
                                                        <source srcset="{{ asset($product->url) }}" type="image/webp">
                                                        <img src="{{ asset($product->url) }}" width="1000" height="1300"
                                                            alt="{{ $product->name }}" loading="eager"
                                                            data-image-large-src="{{ asset($product->url) }}"
                                                            data-image-medium-src="{{ asset($product->url) }}"
                                                            class="js-qv-product-cover db db w-100">
                                                    </picture>
                                                </div>
                                                <div class="layer smooth05 hidden-sm-down" data-toggle="modal"
                                                    data-target="#product-modal">
                                                    <svg class="svgic svgic-search">
                                                        <use href="{{asset('template/images/lib.svg#search')}}"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-6 product-info-section">
                                <h1 class="h1">{{ $product->name }}</h1>
                                <div class="product-prices price flex-container">
                                    <div class="product-price h5 ">
                                        <div class="current-price">
                                            <span class="normal-price" content="{{ $product->price }}">S/ {{ $product->price }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-information">
                                    <div id="product-description-short-6" class="short-desc">
                                        <p>{!! $product->description !!}</p>
                                    </div>
                                    <div class="product-actions js-product-actions">
                                        <div class="product-add-to-cart">
                                            <span class="control-label">Cantidad</span>
                                            <div class="product-quantity flex-container">
                                                <div class="qty flex-container">
                                                    <input type="text" name="qty" id="quantity_wanted"
                                                        class="input-group" value="1" min="1"
                                                        aria-label="Quantity">
                                                        <div class="input-group-btn-vertical">
                                                            <button type="button" class="btn btn-touchspin btn-up">+</button>
                                                            <button type="button" class="btn btn-touchspin btn-down">-</button>
                                                        </div>
                                                </div>
                                                <div class="add flex-container align-items-center">
                                                    <button class="btn btn-primary add-to-cart smooth05"
                                                         type="button" onclick="addToCart2({{ $product->id }})">
                                                        Agregar al Carrito
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="product-minimal-quantity">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="product-modal" class="modal pk-modal fade product-modal js-product-images-modal"
                            tabindex="-1" role="dialog" aria-labelledby="product-modal-label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content flex-container flex-column">

                                    <div class="modal-header flex-container align-items-center m-0">
                                        <strong class="modal-title flex-grow1" id="product-modal-label">
                                            {{ $product->name }}
                                        </strong>
                                        <button type="button" class="close-modal p-0" data-dismiss="modal"
                                            aria-label="Close">
                                            <svg class="svgic js-product-images-modal">
                                                <use href="{{ asset('template/images/lib.svg#cross-thin')}}"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="modal-body relative flex-container">
                                        <div class="swiper product-swiper w-100">
                                            <div class="swiper-wrapper">
                                                @foreach ($product_images as $key => $image)
                                                    <div class="swiper-slide">
                                                        <figure class="relative">
                                                            <picture>
                                                                <source srcset="{{ asset($image->url) }}" type="image/webp">
                                                                <img src="{{ asset($image->url) }}" width="1000" height="1300"
                                                                    alt="{{ $product->name }}" loading="lazy"
                                                                    data-image-large-src="{{ asset($image->url) }}"
                                                                    data-image-medium-src="{{ asset($image->url) }}"
                                                                    class="js-modal-product-cover product-cover-modal db w-100">
                                                            </picture>
                                                        </figure>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content_script')
    <script src="{{ asset('template/js/bottom-5343f0841.js') }}"></script>
    <script src="{{ asset('template/js/modalReady.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.product-swiper', {
                loop: true,
                spaceBetween: 10,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                slidesPerView: 1,
                centeredSlides: true,
                effect: 'slide',
            });
        });
    </script>
@endsection
