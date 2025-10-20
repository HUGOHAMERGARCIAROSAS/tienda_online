@extends('template_frontend.layout')
@section('content_style')
    <link rel="stylesheet" href="{{ asset('template/css/theme-5c3030842.css') }}" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
       #imageModal {
            display: none;
            position: fixed;
            z-index: 9999;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.85);
            justify-content: center;
            align-items: center;
        }

        #imageModal.active {
            display: flex;
        }

        #imageModal .modal-content {
            position: relative;
            background: transparent;
            width: 80%;
            max-width: 900px;
        }

        #imageModal .close-btn {
            position: absolute;
            top: -40px;
            right: -10px;
            font-size: 36px;
            color: #fff;
            cursor: pointer;
            font-weight: bold;
            z-index: 1000;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            width: auto;
            max-width: 100%;
            max-height: 100vh;
            border-radius: 10px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #fff;
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
                                            <ul class="pk-slick-carousel" data-slider_options='{"slidesToShow":4,"vertical":true}'>
                                            @foreach ($product_images as $key => $image)
                                                <li class="thumb-container js-thumb-container">
                                                <img
                                                    src="{{ asset($image->url) }}"
                                                    alt="{{ $product->name }}"
                                                    class="thumb"
                                                    data-large="{{ asset($image->url) }}"
                                                >
                                                </li>
                                            @endforeach
                                            </ul>
                                        </div>
                                        <div class="main-image-container js-images-container">
                                            <div class="product-cover relative">
                                                <div class="smooth500 cp" data-width="500" data-height="650">
                                                    <picture>
                                                    <img
                                                        id="mainImage"
                                                        src="{{ asset($product->url) }}"
                                                        width="500"
                                                        height="650"
                                                        alt="{{ $product->name }}"
                                                        class="js-qv-product-cover db w-100"
                                                    >
                                                    </picture>
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
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div id="imageModal">
    <div class="modal-content">
        <span class="close-btn" id="closeModal">&times;</span>

        <div class="swiper">
        <div class="swiper-wrapper">
            @foreach ($product_images as $image)
            <div class="swiper-slide">
                <img src="{{ asset($image->url) }}" alt="{{ $product->name }}">
            </div>
            @endforeach
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
        </div>
    </div>
    </div>
@endsection
@section('content_script')
    <script src="{{ asset('template/js/bottom-5343f0841.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mainImage = document.getElementById('mainImage');
            const thumbs = document.querySelectorAll('.thumb-container');

            thumbs.forEach((thumb) => {
                thumb.addEventListener('click', function () {
                thumbs.forEach(t => t.classList.remove('selected'));
                this.classList.add('selected');
                const newSrc = this.querySelector('img').getAttribute('data-large');
                mainImage.src = newSrc;
                });
            });

            mainImage.addEventListener('click', function () {
                const modal = document.getElementById('imageModal');
                modal.classList.add('active');
                if (!window.mySwiper) {
                window.mySwiper = new Swiper('.swiper', {
                    loop: true,
                    navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                    },
                    pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    },
                    keyboard: true,
                });
                }
            });
            document.getElementById('closeModal').addEventListener('click', function () {
                document.getElementById('imageModal').classList.remove('active');
            });
            document.getElementById('imageModal').addEventListener('click', function (e) {
                if (e.target === this) {
                this.classList.remove('active');
                }
            });
        });
    </script>
@endsection
