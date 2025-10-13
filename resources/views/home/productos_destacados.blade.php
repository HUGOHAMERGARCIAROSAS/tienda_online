<div class="elementor-element elementor-element-68b581d3 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
    data-id="68b581d3" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-737c2a9a elementor-column elementor-col-100 elementor-top-column"
                data-id="737c2a9a" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-676ab158 elementor-widget elementor-widget-text-editor"
                            data-id="676ab158" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <div class="first-message">
                                        <div class="h6" style="line-height: 0;"></div>
                                    </div>
                                    <div class="h6"
                                        style="text-align: center; margin: 0; font-size: 19px; font-weight: bold;">
                                        MJ GLAM MAKEUP & BEAUTY.</div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-b50481f elementor-widget elementor-widget-text-editor"
                            data-id="b50481f" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p>Quisque euismod pretium lacinia. Vivamus sollicitudin
                                        placerat sit amet sagittis. Mauris ac ante porta,
                                        pellentesque lacus</p>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7dceebfe elementor-widget elementor-widget-pkproducts"
                            data-id="7dceebfe" data-element_type="widget"
                            data-settings="{&quot;slides_to_show&quot;:&quot;5&quot;,&quot;slides_to_show_tablet&quot;:&quot;3&quot;,&quot;slides_to_show_mobile&quot;:1,&quot;slides_to_scroll&quot;:1,&quot;navigation&quot;:&quot;arrows&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;direction&quot;:&quot;ltr&quot;,&quot;speed1&quot;:500}"
                            data-widget_type="pkproducts.default">
                            <div class="elementor-widget-container">
                                <div class="pk-ce-widget-wrapper elementor-image-carousel-wrapper elementor-slick-slider"
                                    dir="ltr">
                                    <h2 class="module-title module-title-center"><span>PRODUCTOS DESTACADOS</span></h2>
                                    <div class="pk-ce-widget view_grid pk-ce-carousel elementor-image-carousel slick-arrows-inside"
                                        data-slider_options={&quot;slidesToShow&quot;:5,&quot;slidesToShowTablet&quot;:3,&quot;slidesToShowMobile&quot;:1,&quot;slidesToScroll&quot;:1,&quot;slidesToScrollTablet&quot;:2,&quot;slidesToScrollMobile&quot;:1,&quot;autoplaySpeed&quot;:5000,&quot;autoplay&quot;:true,&quot;infinite&quot;:true,&quot;pauseOnHover&quot;:true,&quot;speed&quot;:500,&quot;arrows&quot;:true,&quot;dots&quot;:false,&quot;rtl&quot;:false,&quot;fade&quot;:false}>
                                        @foreach ($productos_destacados as $key => $product)    
                                            <article class="product-miniature js-product-miniature js-product new women"
                                                data-id-product="6" data-id-product-attribute="31">
                                                <div class="thumbnail-container relative">
                                                    <div class="thumbnail product-thumbnail relative flex-container">
                                                        <a href="{{ route('frontend.product.show', ['slug' => $product->slug]) }}"
                                                            class="relative oh db subimage-true">
                                                            <picture class="cover-image smooth02" title="{{$product->name}}">
                                                                <source srcset="{{ asset($product->url) }}"
                                                                    type="image/webp">
                                                                <img src="{{ asset($product->url) }}"
                                                                    width="500" height="650"
                                                                    alt="{{ $product->name}}"
                                                                    loading="lazy"
                                                                    data-image-large-src="{{ asset($product->url) }}"
                                                                    data-image-medium-src="{{ asset($product->url) }}"
                                                                    class="db w-100">
                                                            </picture>
                                                            <picture class="cover-image smooth02" title="{{$product->name}}">
                                                                <source
                                                                    srcset="{{ asset($product->url) }}"
                                                                    type="image/webp">
                                                                <img src="{{ asset($product->url) }}"
                                                                    width="500" height="650"
                                                                    alt="{{ $product->name}}"
                                                                    loading="lazy"
                                                                    data-image-large-src="{{ asset($product->url) }}"
                                                                    data-image-medium-src="{{ asset($product->url) }}"
                                                                    class="db w-100">
                                                            </picture>
                                                            <picture class="cover-image smooth02" title="{{$product->name}}">
                                                                <source
                                                                    srcset="{{ asset($product->url) }}"
                                                                    type="image/webp">
                                                                <img src="{{ asset($product->url) }}"
                                                                    width="500" height="650"
                                                                    alt="{{ $product->name}}"
                                                                    loading="lazy"
                                                                    data-image-large-src="{{ asset($product->url) }}"
                                                                    data-image-medium-src="{{ asset($product->url) }}"
                                                                    class="db w-100">
                                                            </picture>
                                                            <span class="pmimage-switcher flex-container">
                                                                <span class="relative db flex-grow1"></span>
                                                                <span class="relative db flex-grow1"></span>
                                                                <span class="relative db flex-grow1"></span>
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
                                                        <div class="product-description relative clearfix">
                                                            <h2 class="product-title text-left">
                                                                <a href="{{ route('frontend.product.show', ['slug' => $product->slug]) }}">
                                                                    {{ $product->name }}
                                                                </a>
                                                            </h2>
                                                            <div class="product-price-and-shipping">
                                                                <span class="price" content="{{ $product->price }}">S/ {{ $product->price }}</span>
                                                            </div>
                                                            <div
                                                                class="short-desc product-description-short pm_desk_false hidden">
                                                                <p>
                                                                    {!! $product->description !!}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
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
</div>
