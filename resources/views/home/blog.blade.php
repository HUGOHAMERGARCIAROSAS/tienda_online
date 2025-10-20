<div class="elementor-element elementor-element-55b6be0f elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
    data-id="55b6be0f" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-25f1ee45 elementor-column elementor-col-100 elementor-top-column"
                data-id="25f1ee45" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-2715a4f8 elementor-widget elementor-widget-pkbrands"
                            data-id="2715a4f8" data-element_type="widget"
                            data-settings="{&quot;slides_to_show&quot;:&quot;7&quot;,&quot;slides_to_show_tablet&quot;:&quot;3&quot;,&quot;slides_to_show_mobile&quot;:&quot;1&quot;,&quot;slides_to_scroll_tablet&quot;:&quot;2&quot;,&quot;slides_to_scroll_mobile&quot;:&quot;1&quot;,&quot;slides_to_scroll&quot;:1,&quot;navigation&quot;:&quot;arrows&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;direction&quot;:&quot;ltr&quot;,&quot;speed1&quot;:500}"
                            data-widget_type="pkbrands.default">
                            <div class="elementor-widget-container">
                                <div class="pk-ce-widget-wrapper elementor-image-carousel-wrapper elementor-slick-slider"
                                    dir="ltr">
                                    <h2 class="module-title module-title-center"><span>Nuestras Marcas</span></h2>
                                    <div class="pk-ce-widget view_grid pk-ce-carousel elementor-image-carousel slick-arrows-inside"
                                        data-slider_options={&quot;slidesToShow&quot;:7,&quot;slidesToShowTablet&quot;:3,&quot;slidesToShowMobile&quot;:1,&quot;slidesToScroll&quot;:1,&quot;slidesToScrollTablet&quot;:2,&quot;slidesToScrollMobile&quot;:1,&quot;autoplaySpeed&quot;:5000,&quot;autoplay&quot;:true,&quot;infinite&quot;:true,&quot;pauseOnHover&quot;:true,&quot;speed&quot;:500,&quot;arrows&quot;:true,&quot;dots&quot;:false,&quot;rtl&quot;:false,&quot;fade&quot;:false}>
                                        @foreach ($brands as  $brand)    
                                            <figure class="manuf-indent">
                                                <a href="javascript:void(0);" title="Marcas" class="db oh">
                                                    <img src="{{ $brand->url }}"
                                                        alt="Marcas" width="202" height="150" loading="lazy">
                                                </a>
                                            </figure>
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
