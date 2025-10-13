<div class="elementor-element elementor-element-a664679 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
    data-id="a664679" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-6f3b860d elementor-column elementor-col-100 elementor-top-column"
                data-id="6f3b860d" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-74b605c5 elementor-widget elementor-widget-pkslider"
                            data-id="74b605c5" data-element_type="widget"
                            data-settings="{&quot;slides_to_show&quot;:&quot;1&quot;,&quot;slides_to_show_tablet&quot;:&quot;1&quot;,&quot;slides_to_show_mobile&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;arrows&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;autoplay&quot;:&quot;no&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;direction&quot;:&quot;ltr&quot;,&quot;speed1&quot;:500,&quot;infoblock_animation_in&quot;:&quot;-&quot;,&quot;infoblock_animation_easing&quot;:&quot;easeOutSine&quot;}"
                            data-widget_type="pkslider.default">
                            <div class="elementor-widget-container">
                                <div class="pk-ce-widget-wrapper elementor-image-carousel-wrapper elementor-slick-slider"
                                    dir="ltr">
                                    <div class="pk-ce-widget view_grid pk-ce-carousel elementor-image-carousel widget-pkslider slick-arrows-inside"
                                        data-slider_options={&quot;slidesToShow&quot;:1,&quot;slidesToShowTablet&quot;:1,&quot;slidesToShowMobile&quot;:1,&quot;slidesToScroll&quot;:1,&quot;slidesToScrollTablet&quot;:2,&quot;slidesToScrollMobile&quot;:1,&quot;autoplaySpeed&quot;:5000,&quot;autoplay&quot;:false,&quot;infinite&quot;:true,&quot;pauseOnHover&quot;:true,&quot;speed&quot;:500,&quot;arrows&quot;:true,&quot;dots&quot;:false,&quot;rtl&quot;:false,&quot;fade&quot;:true}>
                                        @foreach ($sliders as $key=>$slider)
                                            <div class="pk-slider-item elementor-repeater-item-1c11511 h-100 w-100 oh">
                                                <div class="pk-slide-bg h-100 w-100"
                                                    style="background-position: center center;">
                                                    <img src="{{ asset('template_admin/images/sliders/'.$slider->imagen) }}"
                                                        class="db pk-slide-image no-animation animated" width="1920"
                                                        height="800" alt="Main image alt" data-animationin="-"
                                                        fetchpriority="high">
                                                    <div class="pk-slide-content flex-container flex-column align-items-start relative h-100 no-animation animated"
                                                        data-animationin="-">
                                                        <div class="pk-slide-content-wrapper flex-container flex-column">
                                                        </div>
                                                    </div>
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
</div>
