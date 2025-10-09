@extends('template_frontend.layout')
@section('content')
    <div class="page-width top-content">
        <nav data-depth="3" class="breadcrumb">
            <ol>
                <li>
                    <a href="{{ url('/') }}"> <span>Home</span> </a>
                </li>

                <li>
                    <a href="#">
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
                <div class="elementor-element elementor-element-la9ha8z elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                    data-id="la9ha8z" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-csuhjfc elementor-column elementor-col-100 elementor-top-column"
                                data-id="csuhjfc" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-bdab527 pk-productfilter-pk-horizontal elementor-widget elementor-widget-pkcategoryfilter"
                                            data-id="bdab527" data-element_type="widget"
                                            data-widget_type="pkcategoryfilter.default">
                                            <div class="elementor-widget-container">
                                                <div id="search_filters_wrapper"
                                                    class="elementor-filter-wrapper sidebar hidden"
                                                    data-trigger-target="filter-wrapper">
                                                    <div id="search_filters_wrapper">
                                                        <section id="js-active-search-filters" class="hide">
                                                            <h2 class="h6 active-filter-title">
                                                                Active filters
                                                            </h2>
                                                        </section>

                                                        <div id="search_filters">
                                                            <section class="facet">
                                                                <!--ALYSUM-->
                                                                <h4 class="module-title facet-title">
                                                                    <span class="title-text">Categories</span>
                                                                    <span class="title" data-target="#facet_26449"
                                                                        data-toggle="collapse" aria-expanded="true"
                                                                        role="button">
                                                                        <span class="navbar-toggler collapse-icons">
                                                                            <svg class="svgic svgic-updown">
                                                                                <path
                                                                                    d="M8 2.194c0 .17-.062.34-.183.47L4.44 6.275c-.117.126-.275.197-.44.197-.165 0-.323-.07-.44-.194L.184 2.666c-.242-.26-.243-.68 0-.94.243-.26.637-.26.88 0L4 4.866l2.937-3.14c.243-.26.638-.26.88 0 .12.128.183.298.183.468z" />
                                                                                <path
                                                                                    d="M7.958,5.554c0-0.223-0.084-0.443-0.253-0.612L4.603,1.835 c-0.334-0.334-0.873-0.334-1.206,0L0.295,4.941c-0.335,0.335-0.337,0.882-0.004,1.22C0.624,6.499,1.166,6.501,1.5,6.165L4,3.663 l2.5,2.502c0.336,0.336,0.877,0.334,1.21-0.004C7.876,5.993,7.958,5.772,7.958,5.554z" />
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </h4>
                                                                <!--/ALYSUM-->

                                                                <ul id="facet_26449" class="pkradio collapse in">
                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_26449_0">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_26449_0"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Categories-Blouses"
                                                                                    type="checkbox" />
                                                                                <span class="ps-shown-by-js">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Categories-Blouses"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Blouses
                                                                                <span class="magnitude hidden">(9)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_26449_1">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_26449_1"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Categories-Shirts"
                                                                                    type="checkbox" />
                                                                                <span class="ps-shown-by-js">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Categories-Shirts"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Shirts
                                                                                <span class="magnitude hidden">(12)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_26449_2">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_26449_2"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Categories-T%5C-shirts"
                                                                                    type="checkbox" />
                                                                                <span class="ps-shown-by-js">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Categories-T%5C-shirts"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                T-shirts
                                                                                <span class="magnitude hidden">(11)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_26449_3">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_26449_3"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Categories-Tank+Tops"
                                                                                    type="checkbox" />
                                                                                <span class="ps-shown-by-js">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Categories-Tank+Tops"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Tank Tops
                                                                                <span class="magnitude hidden">(11)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_26449_4">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_26449_4"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Categories-Tops"
                                                                                    type="checkbox" />
                                                                                <span class="ps-shown-by-js">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Categories-Tops"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Tops
                                                                                <span class="magnitude hidden">(12)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </section>
                                                            <section class="facet">
                                                                <!--ALYSUM-->
                                                                <h4 class="module-title facet-title">
                                                                    <span class="title-text">Brand</span>
                                                                    <span class="title" data-target="#facet_57629"
                                                                        data-toggle="collapse" aria-expanded="true"
                                                                        role="button">
                                                                        <span class="navbar-toggler collapse-icons">
                                                                            <svg class="svgic svgic-updown">
                                                                                <path
                                                                                    d="M8 2.194c0 .17-.062.34-.183.47L4.44 6.275c-.117.126-.275.197-.44.197-.165 0-.323-.07-.44-.194L.184 2.666c-.242-.26-.243-.68 0-.94.243-.26.637-.26.88 0L4 4.866l2.937-3.14c.243-.26.638-.26.88 0 .12.128.183.298.183.468z" />
                                                                                <path
                                                                                    d="M7.958,5.554c0-0.223-0.084-0.443-0.253-0.612L4.603,1.835 c-0.334-0.334-0.873-0.334-1.206,0L0.295,4.941c-0.335,0.335-0.337,0.882-0.004,1.22C0.624,6.499,1.166,6.501,1.5,6.165L4,3.663 l2.5,2.502c0.336,0.336,0.877,0.334,1.21-0.004C7.876,5.993,7.958,5.772,7.958,5.554z" />
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </h4>
                                                                <!--/ALYSUM-->

                                                                <ul id="facet_57629" class="pkradio collapse in">
                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_57629_0">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_57629_0"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Brand-Anchorsea"
                                                                                    type="checkbox" />
                                                                                <span class="ps-shown-by-js">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Brand-Anchorsea"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Anchorsea
                                                                                <span class="magnitude hidden">(2)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_57629_1">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_57629_1"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Brand-Mahogany"
                                                                                    type="checkbox" />
                                                                                <span class="ps-shown-by-js">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Brand-Mahogany"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Mahogany
                                                                                <span class="magnitude hidden">(4)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_57629_2">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_57629_2"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Brand-Masters"
                                                                                    type="checkbox" />
                                                                                <span class="ps-shown-by-js">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Brand-Masters"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Masters
                                                                                <span class="magnitude hidden">(1)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_57629_3">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_57629_3"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Brand-Rebil"
                                                                                    type="checkbox" />
                                                                                <span class="ps-shown-by-js">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Brand-Rebil"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Rebil
                                                                                <span class="magnitude hidden">(3)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_57629_4">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_57629_4"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Brand-Upimer"
                                                                                    type="checkbox" />
                                                                                <span class="ps-shown-by-js">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Brand-Upimer"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Upimer
                                                                                <span class="magnitude hidden">(4)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_57629_5">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_57629_5"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Brand-Woodsman"
                                                                                    type="checkbox" />
                                                                                <span class="ps-shown-by-js">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Brand-Woodsman"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Woodsman
                                                                                <span class="magnitude hidden">(5)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_57629_6">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_57629_6"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Brand-WWA"
                                                                                    type="checkbox" />
                                                                                <span class="ps-shown-by-js">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Brand-WWA"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                WWA
                                                                                <span class="magnitude hidden">(1)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_57629_7">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_57629_7"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Brand-Yellowoak"
                                                                                    type="checkbox" />
                                                                                <span class="ps-shown-by-js">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Brand-Yellowoak"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Yellowoak
                                                                                <span class="magnitude hidden">(3)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </section>
                                                            <section class="facet">
                                                                <!--ALYSUM-->
                                                                <h4 class="module-title facet-title">
                                                                    <span class="title-text">Price</span>
                                                                    <span class="title" data-target="#facet_4154"
                                                                        data-toggle="collapse" aria-expanded="true"
                                                                        role="button">
                                                                        <span class="navbar-toggler collapse-icons">
                                                                            <svg class="svgic svgic-updown">
                                                                                <path
                                                                                    d="M8 2.194c0 .17-.062.34-.183.47L4.44 6.275c-.117.126-.275.197-.44.197-.165 0-.323-.07-.44-.194L.184 2.666c-.242-.26-.243-.68 0-.94.243-.26.637-.26.88 0L4 4.866l2.937-3.14c.243-.26.638-.26.88 0 .12.128.183.298.183.468z" />
                                                                                <path
                                                                                    d="M7.958,5.554c0-0.223-0.084-0.443-0.253-0.612L4.603,1.835 c-0.334-0.334-0.873-0.334-1.206,0L0.295,4.941c-0.335,0.335-0.337,0.882-0.004,1.22C0.624,6.499,1.166,6.501,1.5,6.165L4,3.663 l2.5,2.502c0.336,0.336,0.877,0.334,1.21-0.004C7.876,5.993,7.958,5.772,7.958,5.554z" />
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </h4>
                                                                <!--/ALYSUM-->

                                                                <ul id="facet_4154" class="faceted-slider collapse in"
                                                                    data-slider-min="16" data-slider-max="300"
                                                                    data-slider-id="4154" data-slider-values="null"
                                                                    data-slider-unit="$" data-slider-label="Price"
                                                                    data-slider-specifications='{"symbol":[".",",",";","%","-","+","E","\u00d7","\u2030","\u221e","NaN"],"currencyCode":"USD","currencySymbol":"$","numberSymbols":[".",",",";","%","-","+","E","\u00d7","\u2030","\u221e","NaN"],"positivePattern":"\u00a4#,##0.00","negativePattern":"-\u00a4#,##0.00","maxFractionDigits":2,"minFractionDigits":2,"groupingUsed":true,"primaryGroupSize":3,"secondaryGroupSize":3}'
                                                                    data-slider-encoded-url="https://alysum.promokit.eu/en/4-tops">
                                                                    <li>
                                                                        <p id="facet_label_4154">
                                                                            $16.00 - $300.00
                                                                        </p>
                                                                        <div id="slider-range_4154"></div>
                                                                    </li>
                                                                </ul>
                                                            </section>
                                                            <section class="facet">
                                                                <!--ALYSUM-->
                                                                <h4 class="module-title facet-title">
                                                                    <span class="title-text">Size</span>
                                                                    <span class="title" data-target="#facet_32408"
                                                                        data-toggle="collapse" aria-expanded="true"
                                                                        role="button">
                                                                        <span class="navbar-toggler collapse-icons">
                                                                            <svg class="svgic svgic-updown">
                                                                                <path
                                                                                    d="M8 2.194c0 .17-.062.34-.183.47L4.44 6.275c-.117.126-.275.197-.44.197-.165 0-.323-.07-.44-.194L.184 2.666c-.242-.26-.243-.68 0-.94.243-.26.637-.26.88 0L4 4.866l2.937-3.14c.243-.26.638-.26.88 0 .12.128.183.298.183.468z" />
                                                                                <path
                                                                                    d="M7.958,5.554c0-0.223-0.084-0.443-0.253-0.612L4.603,1.835 c-0.334-0.334-0.873-0.334-1.206,0L0.295,4.941c-0.335,0.335-0.337,0.882-0.004,1.22C0.624,6.499,1.166,6.501,1.5,6.165L4,3.663 l2.5,2.502c0.336,0.336,0.877,0.334,1.21-0.004C7.876,5.993,7.958,5.772,7.958,5.554z" />
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </h4>
                                                                <!--/ALYSUM-->

                                                                <ul id="facet_32408" class="pkradio collapse in">
                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_32408_0">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_32408_0"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Size-S"
                                                                                    type="checkbox" />
                                                                                <span class="ps-shown-by-js">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Size-S"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                S
                                                                                <span class="magnitude hidden">(17)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_32408_1">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_32408_1"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Size-M"
                                                                                    type="checkbox" />
                                                                                <span class="ps-shown-by-js">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Size-M"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                M
                                                                                <span class="magnitude hidden">(17)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_32408_2">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_32408_2"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Size-L"
                                                                                    type="checkbox" />
                                                                                <span class="ps-shown-by-js">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Size-L"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                L
                                                                                <span class="magnitude hidden">(17)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </section>
                                                            <section class="facet">
                                                                <!--ALYSUM-->
                                                                <h4 class="module-title facet-title">
                                                                    <span class="title-text">Color</span>
                                                                    <span class="title" data-target="#facet_47175"
                                                                        data-toggle="collapse" aria-expanded="true"
                                                                        role="button">
                                                                        <span class="navbar-toggler collapse-icons">
                                                                            <svg class="svgic svgic-updown">
                                                                                <path
                                                                                    d="M8 2.194c0 .17-.062.34-.183.47L4.44 6.275c-.117.126-.275.197-.44.197-.165 0-.323-.07-.44-.194L.184 2.666c-.242-.26-.243-.68 0-.94.243-.26.637-.26.88 0L4 4.866l2.937-3.14c.243-.26.638-.26.88 0 .12.128.183.298.183.468z" />
                                                                                <path
                                                                                    d="M7.958,5.554c0-0.223-0.084-0.443-0.253-0.612L4.603,1.835 c-0.334-0.334-0.873-0.334-1.206,0L0.295,4.941c-0.335,0.335-0.337,0.882-0.004,1.22C0.624,6.499,1.166,6.501,1.5,6.165L4,3.663 l2.5,2.502c0.336,0.336,0.877,0.334,1.21-0.004C7.876,5.993,7.958,5.772,7.958,5.554z" />
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </h4>
                                                                <!--/ALYSUM-->

                                                                <ul id="facet_47175" class="pkradio collapse pkcolor in">
                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_47175_0">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_47175_0"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Color-Grey"
                                                                                    type="checkbox" />
                                                                                <span class="color"
                                                                                    style="background-color: #eef2f5">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Color-Grey"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Grey
                                                                                <span class="magnitude hidden">(5)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <span class="color-tooltip"
                                                                                style="background-color: #eef2f5"></span>
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_47175_1">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_47175_1"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Color-wood"
                                                                                    type="checkbox" />
                                                                                <span class="color"
                                                                                    style="background-color: #ccc6b8">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Color-wood"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Wood
                                                                                <span class="magnitude hidden">(1)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <span class="color-tooltip"
                                                                                style="background-color: #ccc6b8"></span>
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_47175_2">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_47175_2"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Color-taupe"
                                                                                    type="checkbox" />
                                                                                <span class="color"
                                                                                    style="background-color: #e5ded4">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Color-taupe"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Taupe
                                                                                <span class="magnitude hidden">(5)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <span class="color-tooltip"
                                                                                style="background-color: #e5ded4"></span>
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_47175_3">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_47175_3"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Color-Beige"
                                                                                    type="checkbox" />
                                                                                <span class="color"
                                                                                    style="background-color: #e0cda5">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Color-Beige"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Beige
                                                                                <span class="magnitude hidden">(3)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <span class="color-tooltip"
                                                                                style="background-color: #e0cda5"></span>
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_47175_4">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_47175_4"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Color-White"
                                                                                    type="checkbox" />
                                                                                <span class="color"
                                                                                    style="background-color: #ffffff">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Color-White"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                White
                                                                                <span class="magnitude hidden">(5)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <span class="color-tooltip"
                                                                                style="background-color: #ffffff"></span>
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_47175_5">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_47175_5"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Color-Black"
                                                                                    type="checkbox" />
                                                                                <span class="color"
                                                                                    style="background-color: #555555">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Color-Black"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Black
                                                                                <span class="magnitude hidden">(4)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <span class="color-tooltip"
                                                                                style="background-color: #555555"></span>
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_47175_6">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_47175_6"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Color-camel"
                                                                                    type="checkbox" />
                                                                                <span class="color"
                                                                                    style="background-color: #ddd3b8">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Color-camel"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Camel
                                                                                <span class="magnitude hidden">(5)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <span class="color-tooltip"
                                                                                style="background-color: #ddd3b8"></span>
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_47175_7">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_47175_7"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Color-orange"
                                                                                    type="checkbox" />
                                                                                <span class="color"
                                                                                    style="background-color: #f5ccac">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Color-orange"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Orange
                                                                                <span class="magnitude hidden">(5)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <span class="color-tooltip"
                                                                                style="background-color: #f5ccac"></span>
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_47175_8">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_47175_8"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Color-blue"
                                                                                    type="checkbox" />
                                                                                <span class="color"
                                                                                    style="background-color: #b8c4d5">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Color-blue"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Blue
                                                                                <span class="magnitude hidden">(3)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <span class="color-tooltip"
                                                                                style="background-color: #b8c4d5"></span>
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_47175_9">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_47175_9"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Color-green"
                                                                                    type="checkbox" />
                                                                                <span class="color"
                                                                                    style="background-color: #c8d7d2">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Color-green"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Green
                                                                                <span class="magnitude hidden">(6)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <span class="color-tooltip"
                                                                                style="background-color: #c8d7d2"></span>
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_47175_10">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_47175_10"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Color-yellow"
                                                                                    type="checkbox" />
                                                                                <span class="color"
                                                                                    style="background-color: #fce7ae">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Color-yellow"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Yellow
                                                                                <span class="magnitude hidden">(10)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <span class="color-tooltip"
                                                                                style="background-color: #fce7ae"></span>
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label class="facet-label"
                                                                            for="facet_input_47175_11">
                                                                            <span class="custom-checkbox">
                                                                                <input id="facet_input_47175_11"
                                                                                    data-search-url="https://alysum.promokit.eu/en/4-tops?q=Color-pink"
                                                                                    type="checkbox" />
                                                                                <span class="color"
                                                                                    style="background-color: #f2d9de">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="{{ asset('template/images/lib.svg#done') }}">
                                                                                        </use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>

                                                                            <a href="https://alysum.promokit.eu/en/4-tops?q=Color-pink"
                                                                                class="_gray-darker search-link js-search-link"
                                                                                rel="nofollow">
                                                                                Pink
                                                                                <span class="magnitude hidden">(5)</span>
                                                                            </a>
                                                                            <!--ALYSUM-->
                                                                            <span class="color-tooltip"
                                                                                style="background-color: #f2d9de"></span>
                                                                            <!--/ALYSUM-->
                                                                        </label>
                                                                    </li>
                                                                </ul>
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
                                                                    Filter
                                                                    <svg class="svgic">
                                                                        <use
                                                                            href="{{ asset('template/images/lib.svg#filter') }}">
                                                                        </use>
                                                                    </svg>
                                                                </button>

                                                                <div class="sort-by-row flex-container">
                                                                    <div class="products-sort-order dropdown">
                                                                        <a href="#"
                                                                            class="select-title dib cp ellipsis"
                                                                            rel="nofollow" data-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="false">
                                                                            Sort by: Relevance
                                                                        </a>
                                                                        <div class="dropdown-menu">
                                                                            <a rel="nofollow"
                                                                                href="https://alysum.promokit.eu/en/4-tops?order=product.sales.desc"
                                                                                class="select-list db js-search-link">
                                                                                Sales, highest to lowest
                                                                            </a>
                                                                            <a rel="nofollow"
                                                                                href="https://alysum.promokit.eu/en/4-tops?order=product.position.asc"
                                                                                class="select-list db current js-search-link">
                                                                                Relevance
                                                                            </a>
                                                                            <a rel="nofollow"
                                                                                href="https://alysum.promokit.eu/en/4-tops?order=product.name.asc"
                                                                                class="select-list db js-search-link">
                                                                                Name, A to Z
                                                                            </a>
                                                                            <a rel="nofollow"
                                                                                href="https://alysum.promokit.eu/en/4-tops?order=product.name.desc"
                                                                                class="select-list db js-search-link">
                                                                                Name, Z to A
                                                                            </a>
                                                                            <a rel="nofollow"
                                                                                href="https://alysum.promokit.eu/en/4-tops?order=product.price.asc"
                                                                                class="select-list db js-search-link">
                                                                                Price, low to high
                                                                            </a>
                                                                            <a rel="nofollow"
                                                                                href="https://alysum.promokit.eu/en/4-tops?order=product.price.desc"
                                                                                class="select-list db js-search-link">
                                                                                Price, high to low
                                                                            </a>
                                                                            <a rel="nofollow"
                                                                                href="https://alysum.promokit.eu/en/4-tops?order=product.reference.asc"
                                                                                class="select-list db js-search-link">
                                                                                Reference, A to Z
                                                                            </a>
                                                                            <a rel="nofollow"
                                                                                href="https://alysum.promokit.eu/en/4-tops?order=product.reference.desc"
                                                                                class="select-list db js-search-link">
                                                                                Reference, Z to A
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <form method="post"
                                                                    action="https://alysum.promokit.eu/en/comparison"
                                                                    class="compare-form">
                                                                    <button type="submit" class="bt_compare btn">
                                                                        <span>
                                                                            <span class="btn-txt">Compare</span>
                                                                            (<strong class="total-compare-val"
                                                                                data-productsnum="0">0</strong>)
                                                                        </span>
                                                                    </button>
                                                                </form>

                                                                <div class="products-sort-order dropdown">
                                                                    <a href="#"
                                                                        class="select-title dib cp perpage-selector ellipsis"
                                                                        rel="nofollow" data-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        Per Page: 12
                                                                    </a>

                                                                    <div class="dropdown-menu perpage-dropdown">
                                                                        <a rel="nofollow"
                                                                            href="https://alysum.promokit.eu/en/4-tops?resultsPerPage=12"
                                                                            class="select-list db js-search-link">
                                                                            12
                                                                        </a>

                                                                        <a rel="nofollow"
                                                                            href="https://alysum.promokit.eu/en/4-tops?resultsPerPage=24"
                                                                            class="select-list db js-search-link">
                                                                            24
                                                                        </a>

                                                                        <a rel="nofollow"
                                                                            href="https://alysum.promokit.eu/en/4-tops?resultsPerPage=36"
                                                                            class="select-list db js-search-link">
                                                                            36
                                                                        </a>

                                                                        <a rel="nofollow"
                                                                            href="https://alysum.promokit.eu/en/4-tops?resultsPerPage=48"
                                                                            class="select-list db js-search-link">
                                                                            48
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                                <div class="listing_view flex-container">
                                                                    <div class="view_btn smooth02" id="view_magic"
                                                                        data-gridcols="1" title="Grid Auto Mode"
                                                                        tabindex="0" role="button"
                                                                        aria-pressed="false">
                                                                        <svg class="svgic smooth02 svgic-magic">
                                                                            <use
                                                                                href="/themes/alysum/assets/img/lib.svg#magic">
                                                                            </use>
                                                                        </svg>
                                                                    </div>

                                                                    <div class="view_btn smooth02" id="view_grid2"
                                                                        data-gridcols="2" title="Grid 2 columns"
                                                                        tabindex="0" role="button"
                                                                        aria-pressed="false">
                                                                        <svg class="svgic smooth02 svgic-grid2">
                                                                            <use
                                                                                href="/themes/alysum/assets/img/lib.svg#grid2">
                                                                            </use>
                                                                        </svg>
                                                                    </div>

                                                                    <div class="view_btn smooth02" id="view_grid3"
                                                                        data-gridcols="3" title="Grid 3 columns"
                                                                        tabindex="0" role="button"
                                                                        aria-pressed="false">
                                                                        <svg class="svgic smooth02 svgic-grid3">
                                                                            <use
                                                                                href="/themes/alysum/assets/img/lib.svg#grid3">
                                                                            </use>
                                                                        </svg>
                                                                    </div>

                                                                    <div class="view_btn smooth02" id="view_grid4"
                                                                        data-gridcols="4" title="Grid 4 columns"
                                                                        tabindex="0" role="button"
                                                                        aria-pressed="false">
                                                                        <svg class="svgic smooth02 svgic-grid4">
                                                                            <use
                                                                                href="/themes/alysum/assets/img/lib.svg#grid4">
                                                                            </use>
                                                                        </svg>
                                                                    </div>

                                                                    <div class="view_btn smooth02 active" id="view_grid5"
                                                                        data-gridcols="5" title="Grid 5 columns"
                                                                        tabindex="0" role="button"
                                                                        aria-pressed="false">
                                                                        <svg class="svgic smooth02 svgic-grid5">
                                                                            <use
                                                                                href="/themes/alysum/assets/img/lib.svg#grid5">
                                                                            </use>
                                                                        </svg>
                                                                    </div>

                                                                    <div class="view_btn smooth02" id="view_grid6"
                                                                        data-gridcols="6" title="Grid 6 columns"
                                                                        tabindex="0" role="button"
                                                                        aria-pressed="false">
                                                                        <svg class="svgic smooth02 svgic-grid6">
                                                                            <use
                                                                                href="/themes/alysum/assets/img/lib.svg#grid6">
                                                                            </use>
                                                                        </svg>
                                                                    </div>

                                                                    <div class="view_btn smooth02" id="view_list"
                                                                        data-gridcols="0" title="List" tabindex="0"
                                                                        role="button" aria-pressed="false">
                                                                        <svg class="svgic smooth02 svgic-list">
                                                                            <use
                                                                                href="/themes/alysum/assets/img/lib.svg#list">
                                                                            </use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="product_list">
                                                            <div id="js-product-list">
                                                                <div class="product-list-container grid-container">
                                                                    <article
                                                                        class="product-miniature js-product-miniature js-product new women"
                                                                        data-id-product="1" data-id-product-attribute="1">
                                                                        <div class="thumbnail-container relative">
                                                                            <div
                                                                                class="thumbnail product-thumbnail relative flex-container">
                                                                                <a href="{{ route('frontend.product.show', ['slug' => 'producto_1']) }}"
                                                                                    class="relative oh db subimage-true">
                                                                                    <picture class="cover-image smooth02">
                                                                                        <source
                                                                                            srcset="
                                                    https://alysum.promokit.eu/438-home_default/faded-short-sleeves-tshirt.webp
                                                  "
                                                                                            type="image/webp" />
                                                                                        <img src="https://alysum.promokit.eu/438-home_default/faded-short-sleeves-tshirt.jpg"
                                                                                            width="380" height="494"
                                                                                            alt="Faded Short Sleeves Coat Casual Button Down Dre"
                                                                                            loading="lazy"
                                                                                            data-image-large-src="https://alysum.promokit.eu/438-large_default/faded-short-sleeves-tshirt.jpg"
                                                                                            data-image-medium-src="https://alysum.promokit.eu/438-large_default/faded-short-sleeves-tshirt.jpg"
                                                                                            class="db w-100" />
                                                                                    </picture>

                                                                                    <picture class="cover-image smooth02">
                                                                                        <source
                                                                                            srcset="
                                                    https://alysum.promokit.eu/437-home_default/faded-short-sleeves-tshirt.webp
                                                  "
                                                                                            type="image/webp" />
                                                                                        <img src="https://alysum.promokit.eu/437-home_default/faded-short-sleeves-tshirt.jpg"
                                                                                            width="380" height="494"
                                                                                            alt="Faded Short Sleeves Coat Casual Button Down Dre"
                                                                                            loading="lazy"
                                                                                            data-image-large-src="https://alysum.promokit.eu/437-large_default/faded-short-sleeves-tshirt.jpg"
                                                                                            data-image-medium-src="https://alysum.promokit.eu/437-large_default/faded-short-sleeves-tshirt.jpg"
                                                                                            class="db w-100" />
                                                                                    </picture>

                                                                                    <picture class="cover-image smooth02">
                                                                                        <source
                                                                                            srcset="
                                                    https://alysum.promokit.eu/439-home_default/faded-short-sleeves-tshirt.webp
                                                  "
                                                                                            type="image/webp" />
                                                                                        <img src="https://alysum.promokit.eu/439-home_default/faded-short-sleeves-tshirt.jpg"
                                                                                            width="380" height="494"
                                                                                            alt="Faded Short Sleeves Coat Casual Button Down Dre"
                                                                                            loading="lazy"
                                                                                            data-image-large-src="https://alysum.promokit.eu/439-large_default/faded-short-sleeves-tshirt.jpg"
                                                                                            data-image-medium-src="https://alysum.promokit.eu/439-large_default/faded-short-sleeves-tshirt.jpg"
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

                                                                                <div
                                                                                    class="product-actions show-on-hover scale-on-hover">
                                                                                    <a href="#"
                                                                                        class="quick-view js-quick-view btn btn-primary smooth05"
                                                                                        data-link-action="quickview"
                                                                                        title="Quick view"
                                                                                        aria-label="Quick view"
                                                                                        role="button">
                                                                                        <svg class="svgic">
                                                                                            <use
                                                                                                href="/themes/alysum/assets/img/lib.svg#search">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </a>

                                                                                    <form
                                                                                        action="https://alysum.promokit.eu/en/cart"
                                                                                        method="post"
                                                                                        class="add-to-cart-or-refresh">
                                                                                        <input type="hidden"
                                                                                            name="token"
                                                                                            value="7339801978b4c2a7e305df38cbbcf883" />
                                                                                        <input type="hidden"
                                                                                            name="id_product"
                                                                                            value="1"
                                                                                            class="product_page_product_id" />
                                                                                        <input type="hidden"
                                                                                            name="id_product_attribute"
                                                                                            class="product_page_product_attribute_id"
                                                                                            value="1" />
                                                                                        <input type="hidden"
                                                                                            name="qty"
                                                                                            value="1" />

                                                                                        <div
                                                                                            class="product-add-to-cart-mini">
                                                                                            <div class="product-quantity">
                                                                                                <div class="add">
                                                                                                    <button
                                                                                                        class="btn btn-primary add-to-cart"
                                                                                                        title="Add to cart"
                                                                                                        data-button-action="add-to-cart"
                                                                                                        type="submit">
                                                                                                        <svg
                                                                                                            class="svgic">
                                                                                                            <use
                                                                                                                href="/themes/alysum/assets/img/lib.svg#cart">
                                                                                                            </use>
                                                                                                        </svg>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>

                                                                                    <a href="#"
                                                                                        class="add_to_compare flex-container align-items-center compare-button btn"
                                                                                        data-pid="1"
                                                                                        title="Add to compare"
                                                                                        tabindex="0" role="button">
                                                                                        <svg class="svgic">
                                                                                            <use
                                                                                                href="/themes/alysum/assets/img/lib.svg#pk_compare">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </a>
                                                                                </div>
                                                                            </div>

                                                                            <div class="product-desc-wrap">
                                                                                <div
                                                                                    class="product-description relative clearfix">
                                                                                    <h2 class="product-title text-left">
                                                                                        <a
                                                                                            href="{{ url('/product/producto_1') }}">Faded
                                                                                            Short Sleeves Coat
                                                                                            Casual Button Down Dreaa</a>
                                                                                    </h2>

                                                                                    <div
                                                                                        class="product-price-and-shipping">
                                                                                        <span class="price"
                                                                                            content="17.51">$17.51</span>
                                                                                    </div>

                                                                                    <div
                                                                                        class="short-desc product-description-short pm_desk_false hidden">
                                                                                        <p>
                                                                                            Faded short sleeves t-shirt
                                                                                            with high neckline. Soft and
                                                                                            stretchy material for a
                                                                                            comfortable fit. Accessorize
                                                                                            with a straw hat and you're
                                                                                            ready for summer!
                                                                                        </p>
                                                                                    </div>

                                                                                    <div class="hook-reviews">
                                                                                        <div
                                                                                            class="flex-container grade-stars-container rating-width-50">
                                                                                            <div
                                                                                                class="grade-stars-list small-stars">
                                                                                                <div
                                                                                                    class="star-content star-empty">
                                                                                                    <svg
                                                                                                        class="svgic svgic-star">
                                                                                                        <use
                                                                                                            href="/themes/alysum/assets/img/lib.svg#star">
                                                                                                        </use>
                                                                                                    </svg>
                                                                                                    <svg
                                                                                                        class="svgic svgic-star">
                                                                                                        <use
                                                                                                            href="/themes/alysum/assets/img/lib.svg#star">
                                                                                                        </use>
                                                                                                    </svg>
                                                                                                    <svg
                                                                                                        class="svgic svgic-star">
                                                                                                        <use
                                                                                                            href="/themes/alysum/assets/img/lib.svg#star">
                                                                                                        </use>
                                                                                                    </svg>
                                                                                                    <svg
                                                                                                        class="svgic svgic-star">
                                                                                                        <use
                                                                                                            href="/themes/alysum/assets/img/lib.svg#star">
                                                                                                        </use>
                                                                                                    </svg>
                                                                                                    <svg
                                                                                                        class="svgic svgic-star">
                                                                                                        <use
                                                                                                            href="/themes/alysum/assets/img/lib.svg#star">
                                                                                                        </use>
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div class="star-full oh"
                                                                                                    style="width: 50%">
                                                                                                    <div
                                                                                                        class="star-content cut-stars">
                                                                                                        <svg
                                                                                                            class="svgic svgic-star">
                                                                                                            <use
                                                                                                                href="/themes/alysum/assets/img/lib.svg#star">
                                                                                                            </use>
                                                                                                        </svg>
                                                                                                        <svg
                                                                                                            class="svgic svgic-star">
                                                                                                            <use
                                                                                                                href="/themes/alysum/assets/img/lib.svg#star">
                                                                                                            </use>
                                                                                                        </svg>
                                                                                                        <svg
                                                                                                            class="svgic svgic-star">
                                                                                                            <use
                                                                                                                href="/themes/alysum/assets/img/lib.svg#star">
                                                                                                            </use>
                                                                                                        </svg>
                                                                                                        <svg
                                                                                                            class="svgic svgic-star">
                                                                                                            <use
                                                                                                                href="/themes/alysum/assets/img/lib.svg#star">
                                                                                                            </use>
                                                                                                        </svg>
                                                                                                        <svg
                                                                                                            class="svgic svgic-star">
                                                                                                            <use
                                                                                                                href="/themes/alysum/assets/img/lib.svg#star">
                                                                                                            </use>
                                                                                                        </svg>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="rating-numbers">
                                                                                                (<span class="r-type-1">
                                                                                                    2.5/5
                                                                                                </span>
                                                                                                <span
                                                                                                    class="r-type-2 hidden">2.5</span>)
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <ul class="product-flags js-product-flags">
                                                                                    <li class="product-flag new">
                                                                                        New
                                                                                    </li>
                                                                                </ul>
                                                                            </div>

                                                                            <div
                                                                                class="displayProductButtonFixed hide-empty">
                                                                                <a href="#"
                                                                                    class="favoritesButton flex-container align-items-center favorites-button pktopleft btn"
                                                                                    data-pid="1" data-action="add"
                                                                                    title="Přidat k oblíbeným"
                                                                                    aria-label="Přidat k oblíbeným"
                                                                                    role="button">
                                                                                    <svg class="svgic">
                                                                                        <use
                                                                                            href="/dailydeal/themes/alysum/assets/img/lib.svg#love">
                                                                                        </use>
                                                                                    </svg>
                                                                                    <i>0</i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                                <nav class="pagination flex-container">
                                                                    <div class="pagination-info flex-grow1">
                                                                        Showing 1-12 of 23 item(s)
                                                                    </div>

                                                                    <ul class="page-list flex-container list-style-none">
                                                                        <li class="current">
                                                                            <a rel="nofollow"
                                                                                href="https://alysum.promokit.eu/en/4-tops"
                                                                                class="smooth200 disabled js-search-link">
                                                                                1
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a rel="nofollow"
                                                                                href="https://alysum.promokit.eu/en/4-tops?page=2"
                                                                                class="smooth200 js-search-link">
                                                                                2
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a rel="next"
                                                                                href="https://alysum.promokit.eu/en/4-tops?page=2"
                                                                                class="smooth200 next js-search-link">
                                                                                <svg class="svgic">
                                                                                    <use
                                                                                        href="/themes/alysum/assets/img/lib.svg#arrowright">
                                                                                    </use>
                                                                                </svg>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </nav>
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
