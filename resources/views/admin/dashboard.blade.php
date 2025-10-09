@extends('admin.layouts.layout')
@section('styles_css')
    <link rel="stylesheet" href="{{asset('template_admin/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/vendor/animate.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/vendor/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/vendor/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/plugins/simplebar.min.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/plugins/waves.min.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/plugins/nano.min.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/plugins/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/plugins/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/plugins/tabler-icons.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/plugins/jsvectormap.min.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/plugins/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('template_admin/css/main.css')}}">
@endsection
@section('content')
    <div class="app-content-wrap">
        <div class="container-fluid">
            <div class="row overflow-hidden">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body mini-card-body d-flex align-center gap-16">
                            <div class="avatar avatar-xl bg-primary-transparent text-primary">
                                <i class="ri-shopping-bag-3-line fs-42"></i>
                            </div>
                            <div class="card-content">
                                <span class="d-block fs-16 mb-5">Total Orders</span>
                                <h2 class="mb-5">98.5k</h2>
                                <span class="text-success">+1.24%<i class="ri-arrow-up-line ml-5 d-inline-block"></i></span>
                                <span class="fs-12 text-muted ml-5">This week</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body mini-card-body d-flex align-center gap-16">
                            <div class="avatar avatar-xl bg-info-transparent text-info">
                                <i class="ri-user-line fs-42"></i>
                            </div>
                            <div class="card-content">
                                <span class="d-block fs-16 mb-5">New Users</span>
                                <h2 class="mb-5">12.3k</h2>
                                <span class="text-success">+0.87%<i class="ri-arrow-up-line ml-5 d-inline-block"></i></span>
                                <span class="fs-12 text-muted ml-5">This week</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body mini-card-body d-flex align-center gap-16">
                            <div class="avatar avatar-xl bg-danger-transparent text-danger">
                                <i class="ri-box-3-line fs-42"></i>
                            </div>
                            <div class="card-content">
                                <span class="d-block fs-16 mb-5">Available Products</span>
                                <h2 class="mb-5">5,230</h2>
                                <span class="text-danger">-0.34%<i
                                        class="ri-arrow-down-line ml-5 d-inline-block"></i></span>
                                <span class="fs-12 text-muted ml-5">This week</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body mini-card-body d-flex align-center gap-16">
                            <div class="avatar avatar-xl bg-success-transparent text-success">
                                <i class="ri-wallet-3-line fs-42"></i>
                            </div>
                            <div class="card-content">
                                <span class="d-block fs-16 mb-5">Net Profit</span>
                                <h2 class="mb-5">$8.6k</h2>
                                <span class="text-success">+2.05%<i class="ri-arrow-up-line ml-5 d-inline-block"></i></span>
                                <span class="fs-12 text-muted ml-5">This week</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-6 col-xl-12">
                    <div class="card">
                        <div class="card-header justify-between">
                            <h4 class="">Revenue Report</h4>
                            <div class="card-dropdown">
                                <div class="dropdown">
                                    <a class="card-dropdown-icon" href="javascript:void(0);" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                        <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-15">
                            <div id="order-status"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header justify-between">
                            <h4 class="">Sales by Locations</h4>
                            <div class="card-dropdown">
                                <div class="dropdown">
                                    <a class="card-dropdown-icon" href="javascript:void(0);" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                        <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-15">
                            <div id="seles-countries"></div>
                            <div class="bd-progress-wrapper">
                                <div class="single-progress mb-10">
                                    <div class="d-flex-between mb-5">
                                        <h6 class="fs-14">USA</h6>
                                        <span class="progress-number">70%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"
                                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>

                                <div class="single-progress mb-10">
                                    <div class="d-flex-between mb-5">
                                        <h6 class="fs-14">Palestine</h6>
                                        <span class="progress-number">85%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 85%"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>

                                <div class="single-progress mb-10">
                                    <div class="d-flex-between mb-5">
                                        <h6 class="fs-14">Brazil</h6>
                                        <span class="progress-number">60%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>

                                <div class="single-progress">
                                    <div class="d-flex-between mb-5">
                                        <h6 class="fs-14">Ireland</h6>
                                        <span class="progress-number">50%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                    <div class="card-carousel p-relative">
                        <div class="card-slide-top">
                            <h4 class="mb-10 text-black">Trending Product</h4>
                            <span class="badge bg-label-dark"><span class="text-success mr-5">8.5%</span>
                                Than Last
                                Week</span>
                        </div>
                        <div class="swiper trendingProduct p-relative">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card-slide-wrapper p-relative">
                                        <div class="card-slide-thumb">
                                            <img src="{{asset('template_admin/images/product/product-details1.webp')}}" alt="image not found">
                                        </div>
                                        <div class="card-slide-bottom">
                                            <h5 class="text-white mb-10"><a href="javascript:void(0);">Iphone 15 Pro
                                                    Max</a></h5>
                                            <div class="bd-price">
                                                <span class="current-price">$1925.00</span>
                                                <span class="old-price">$1925.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide-wrapper p-relative">
                                        <div class="card-slide-thumb">
                                            <img src="{{asset('template_admin/images/product/product-details2.webp')}}" alt="image not found">
                                        </div>
                                        <div class="card-slide-bottom">
                                            <h5 class="text-white mb-10"><a href="javascript:void(0);">Iphone 15 Pro
                                                    Max</a></h5>
                                            <div class="bd-price">
                                                <span class="current-price">$1925.00</span>
                                                <span class="old-price">$1925.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide-wrapper p-relative">
                                        <div class="card-slide-thumb">
                                            <img src="{{asset('template_admin/images/product/product-details3.webp')}}" alt="image not found">
                                        </div>
                                        <div class="card-slide-bottom">
                                            <h5 class="text-white mb-10"><a href="javascript:void(0);">Iphone 15 Pro
                                                    Max</a></h5>
                                            <div class="bd-price">
                                                <span class="current-price">$1925.00</span>
                                                <span class="old-price">$1925.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-slide-pagination tranding">
                                <div class="bd-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-12">
                    <div class="card">
                        <div class="card-header justify-between">
                            <h4 class="">Top Level Seller</h4>
                            <div class="card-dropdown">
                                <div class="dropdown">
                                    <a class="card-dropdown-icon" href="javascript:void(0);" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                        <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-15">
                            <div class="card-scrollbar">
                                <div class="vendor-box-wrap">
                                    <div class="vendor-box p-relative">
                                        <div class="vendor-content">
                                            <div class="d-flex-between">
                                                <div class="d-flex gap-15">
                                                    <div class="vendor-thumb">
                                                        <img src="{{asset('template_admin/images/avatar/avatar-thumb-001.webp')}}"
                                                            alt="image not found">
                                                    </div>
                                                    <div class="">
                                                        <h5 class="mb-5">Tech Solutions Inc.</h5>
                                                        <span class="text-body">Electronics Vendor</span>
                                                    </div>
                                                </div>
                                                <div class="card-dropdown">
                                                    <div class="dropdown">
                                                        <a class="card-dropdown-icon" href="javascript:void(0);"
                                                            role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);">View
                                                                Orders</a>
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">Contact</a>
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">Reports</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vendor-content mb-10">
                                                <span class="d-block mb-5">Monthly Revenue</span>
                                                <div class="d-flex flex-wrap gap-10">
                                                    <h3 class="">$8,750</h3>
                                                    <div class="">
                                                        <span class="text-success">+3.2%<i
                                                                class="ri-arrow-up-line ml-5 d-inline-block"></i></span>
                                                        <span class="fs-12 text-muted ml-5">This month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vendor-chart">
                                            <div id="widgetChartYear"></div>
                                        </div>
                                    </div>
                                    <div class="vendor-box p-relative">
                                        <div class="vendor-content">
                                            <div class="d-flex-between">
                                                <div class="d-flex gap-15">
                                                    <div class="vendor-thumb">
                                                        <img src="{{asset('template_admin/images/avatar/avatar-thumb-002.webp')}}"
                                                            alt="image not found">
                                                    </div>
                                                    <div class="">
                                                        <h5 class="mb-5">Fashion Trends Ltd.</h5>
                                                        <span class="text-body">Clothing Supplier</span>
                                                    </div>
                                                </div>
                                                <div class="card-dropdown">
                                                    <div class="dropdown">
                                                        <a class="card-dropdown-icon" href="javascript:void(0);"
                                                            role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);">View
                                                                Orders</a>
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">Contact</a>
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">Reports</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vendor-content mb-10">
                                                <span class="d-block mb-5">Monthly Revenue</span>
                                                <div class="d-flex flex-wrap gap-10">
                                                    <h3 class="">$12,300</h3>
                                                    <div class="">
                                                        <span class="text-success">+5.1%<i
                                                                class="ri-arrow-up-line ml-5 d-inline-block"></i></span>
                                                        <span class="fs-12 text-muted ml-5">This month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vendor-chart">
                                            <div id="widgetChartYear2"></div>
                                        </div>
                                    </div>
                                    <div class="vendor-box p-relative">
                                        <div class="vendor-content">
                                            <div class="d-flex-between">
                                                <div class="d-flex gap-15">
                                                    <div class="vendor-thumb">
                                                        <img src="{{asset('template_admin/images/avatar/avatar-thumb-003.webp')}}"
                                                            alt="image not found">
                                                    </div>
                                                    <div class="">
                                                        <h5 class="mb-5">Home Essentials Co.</h5>
                                                        <span class="text-body">Furniture Vendor</span>
                                                    </div>
                                                </div>
                                                <div class="card-dropdown">
                                                    <div class="dropdown">
                                                        <a class="card-dropdown-icon" href="javascript:void(0);"
                                                            role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);">View
                                                                Orders</a>
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">Contact</a>
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">Reports</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vendor-content mb-10">
                                                <span class="d-block mb-5">Monthly Revenue</span>
                                                <div class="d-flex flex-wrap gap-10">
                                                    <h3 class="">$6,450</h3>
                                                    <div class="">
                                                        <span class="text-success">+2.8%<i
                                                                class="ri-arrow-up-line ml-5 d-inline-block"></i></span>
                                                        <span class="fs-12 text-muted ml-5">This month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vendor-chart">
                                            <div id="widgetChartYear3"></div>
                                        </div>
                                    </div>
                                    <div class="vendor-box p-relative">
                                        <div class="vendor-content">
                                            <div class="d-flex-between">
                                                <div class="d-flex gap-15">
                                                    <div class="vendor-thumb">
                                                        <img src="{{asset('template_admin/images/avatar/avatar-thumb-004.webp')}}"
                                                            alt="image not found">
                                                    </div>
                                                    <div class="">
                                                        <h5 class="mb-5">Office Supplies Pro</h5>
                                                        <span class="text-body">Stationery Vendor</span>
                                                    </div>
                                                </div>
                                                <div class="card-dropdown">
                                                    <div class="dropdown">
                                                        <a class="card-dropdown-icon" href="javascript:void(0);"
                                                            role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);">View
                                                                Orders</a>
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">Contact</a>
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">Reports</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vendor-content mb-10">
                                                <span class="d-block mb-5">Monthly Revenue</span>
                                                <div class="d-flex flex-wrap gap-10">
                                                    <h3 class="">$4,920</h3>
                                                    <div class="">
                                                        <span class="text-success">+1.9%<i
                                                                class="ri-arrow-up-line ml-5 d-inline-block"></i></span>
                                                        <span class="fs-12 text-muted ml-5">This month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vendor-chart">
                                            <div id="widgetChartYear4"></div>
                                        </div>
                                    </div>
                                    <div class="vendor-box p-relative">
                                        <div class="vendor-content">
                                            <div class="d-flex-between">
                                                <div class="d-flex gap-15">
                                                    <div class="vendor-thumb">
                                                        <img src="{{asset('template_admin/images/avatar/avatar-thumb-005.webp')}}"
                                                            alt="image not found">
                                                    </div>
                                                    <div class="">
                                                        <h5 class="mb-5">Global Foods Import</h5>
                                                        <span class="text-body">Food Distributor</span>
                                                    </div>
                                                </div>
                                                <div class="card-dropdown">
                                                    <div class="dropdown">
                                                        <a class="card-dropdown-icon" href="javascript:void(0);"
                                                            role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);">View
                                                                Orders</a>
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">Contact</a>
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">Reports</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vendor-content mb-10">
                                                <span class="d-block mb-5">Monthly Revenue</span>
                                                <div class="d-flex flex-wrap gap-10">
                                                    <h3 class="">$15,680</h3>
                                                    <div class="">
                                                        <span class="text-success">+7.3%<i
                                                                class="ri-arrow-up-line ml-5 d-inline-block"></i></span>
                                                        <span class="fs-12 text-muted ml-5">This month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vendor-chart">
                                            <div id="widgetChartYear5"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-12">
                    <div class="card">
                        <div class="card-header justify-between">
                            <h4 class="">Best Selling Products</h4>
                            <div class="card-dropdown">
                                <div class="dropdown">
                                    <a class="card-dropdown-icon" href="javascript:void(0);" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                        <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-15">
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Order</th>
                                            <th>Available</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-10">
                                                    <div class="avatar"><img class="radius-6"
                                                            src="{{asset('template_admin/images/product/item7.png')}}" alt="image not found">
                                                    </div>
                                                    <h6 class="text-heading fw-6">MacBook Pro M2</h6>
                                                </div>
                                            </td>
                                            <td class="text-heading">$1999.00</td>
                                            <td class="text-muted">12</td>
                                            <td class="text-muted">341</td>
                                            <td class="text-heading">$24000.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-10">
                                                    <div class="avatar"><img class="radius-6"
                                                            src="{{asset('template_admin/images/product/item8.png')}}" alt="image not found">
                                                    </div>
                                                    <h6 class="text-heading fw-6">Home Speakers</h6>
                                                </div>
                                            </td>
                                            <td class="text-heading">$1999.00</td>
                                            <td class="text-muted">12</td>
                                            <td class="text-muted">341</td>
                                            <td class="text-heading">$24000.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-10">
                                                    <div class="avatar"><img class="radius-6"
                                                            src="{{asset('template_admin/images/product/item9.png')}}" alt="image not found">
                                                    </div>
                                                    <h6 class="text-heading fw-6">Kitchen Appliance</h6>
                                                </div>
                                            </td>
                                            <td class="text-heading">$1999.00</td>
                                            <td class="text-muted">12</td>
                                            <td><span class="badge bg-label-danger">Out of
                                                    Stock</span></td>
                                            <td class="text-heading">$24000.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-10">
                                                    <div class="avatar"><img class="radius-6"
                                                            src="{{asset('template_admin/images/product/item10.png')}}" alt="image not found">
                                                    </div>
                                                    <h6 class="text-heading fw-6">Air Conditioners</h6>
                                                </div>
                                            </td>
                                            <td class="text-heading">$1999.00</td>
                                            <td class="text-muted">12</td>
                                            <td class="text-muted">341</td>
                                            <td class="text-heading">$24000.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-10">
                                                    <div class="avatar"><img class="radius-6"
                                                            src="{{asset('template_admin/images/product/item11.png')}}" alt="image not found">
                                                    </div>
                                                    <h6 class="text-heading fw-6">Gaming Consoles</h6>
                                                </div>
                                            </td>
                                            <td class="text-heading">$1999.00</td>
                                            <td class="text-muted">12</td>
                                            <td><span class="badge bg-label-success">Sale 30%
                                                    off</span>
                                            </td>
                                            <td class="text-heading">$24000.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-6">
                    <div class="card height-equal">
                        <div class="card-header justify-between">
                            <h4 class="">Recent Transactions</h4>
                            <div class="card-dropdown">
                                <div class="dropdown">
                                    <a class="card-dropdown-icon" href="javascript:void(0);" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                        <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-15">
                            <ul class="transactions-list">
                                <li class="d-flex-between flex-xxs-wrap gap-15 mb-15">
                                    <div class="d-flex align-center">
                                        <div class="badge square fs-18 bg-label-primary py-10 mr-10">
                                            <i class="ri-bank-card-line"></i>
                                        </div>
                                        <div>
                                            <h6 class="fs-14">Order #DN-78945</h6>
                                            <span class="text-muted lh-1">Visa •••• 4215 • 12/25</span>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <h6 class="text-success mb-5">$249.99</h6>
                                        <span class="text-body-secondary">Completed</span>
                                    </div>
                                </li>

                                <li class="d-flex-between flex-xxs-wrap gap-15 mb-15">
                                    <div class="d-flex align-center">
                                        <div class="badge square fs-18 bg-label-primary py-10 mr-10">
                                            <i class="ri-paypal-line"></i>
                                        </div>
                                        <div>
                                            <h6 class="fs-14">Order #DN-78944</h6>
                                            <span class="text-muted lh-1">PayPal • <a
                                                    href="https://demo.topylo.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="cfbabcaabd8faab7aea2bfa3aae1aca0a2">[email&#160;protected]</a></span>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <h6 class="text-warning mb-5">$129.50</h6>
                                        <span class="text-body-secondary">Processing</span>
                                    </div>
                                </li>

                                <li class="d-flex-between flex-xxs-wrap gap-15 mb-15">
                                    <div class="d-flex align-center">
                                        <div class="badge square fs-18 bg-label-primary py-10 mr-10">
                                            <i class="ri-bank-line"></i>
                                        </div>
                                        <div>
                                            <h6 class="fs-14">Order #DN-78943</h6>
                                            <span class="text-muted lh-1">Bank Transfer • Chase</span>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <h6 class="text-danger mb-5">$89.99</h6>
                                        <span class="text-body-secondary">Failed</span>
                                    </div>
                                </li>

                                <li class="d-flex-between flex-xxs-wrap gap-15 mb-15">
                                    <div class="d-flex align-center">
                                        <div class="badge square fs-18 bg-label-primary py-10 mr-10">
                                            <i class="ri-bit-coin-line"></i>
                                        </div>
                                        <div>
                                            <h6 class="fs-14">Order #DN-78942</h6>
                                            <span class="text-muted lh-1">Bitcoin • 3 confirmations</span>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <h6 class="text-success mb-5">$1,450.00</h6>
                                        <span class="text-body-secondary">Completed</span>
                                    </div>
                                </li>

                                <li class="d-flex-between flex-xxs-wrap gap-15 mb-15">
                                    <div class="d-flex align-center">
                                        <div class="badge square fs-18 bg-label-primary py-10 mr-10">
                                            <i class="ri-refund-2-line"></i>
                                        </div>
                                        <div>
                                            <h6 class="fs-14">Refund #RF-58721</h6>
                                            <span class="text-muted lh-1">Original Order #DN-78940</span>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <h6 class="text-info mb-5">-$65.25</h6>
                                        <span class="text-body-secondary">Refunded</span>
                                    </div>
                                </li>
                                <li class="d-flex-between flex-xxs-wrap gap-15 mb-15">
                                    <div class="d-flex align-center">
                                        <div class="badge square fs-18 bg-label-primary py-10 mr-10">
                                            <i class="ri-apple-line"></i>
                                        </div>
                                        <div>
                                            <h6 class="fs-14">Order #DN-78941</h6>
                                            <span class="text-muted lh-1">Apple Pay •••• 8792</span>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <h6 class="text-success mb-5">$179.99</h6>
                                        <span class="text-body-secondary">Completed</span>
                                    </div>
                                </li>

                                <li class="d-flex-between flex-xxs-wrap gap-15 mb-15">
                                    <div class="d-flex align-center">
                                        <div class="badge square fs-18 bg-label-primary py-10 mr-10">
                                            <i class="ri-alert-line"></i>
                                        </div>
                                        <div>
                                            <h6 class="fs-14">Order #DN-78940</h6>
                                            <span class="text-muted lh-1">Dispute • Partial Refund</span>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <h6 class="text-danger mb-5">-$49.99</h6>
                                        <span class="text-body-secondary">Disputed</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="d-flex-between stats-card mt-30">
                                <div class="text-center">
                                    <h3 class="text-success mb-5">$8,245.60</h3>
                                    <p class="text-muted fs-12">Total Revenue</p>
                                </div>
                                <div class="text-center">
                                    <h3 class="text-primary mb-5">42</h3>
                                    <p class="text-muted fs-12">Transactions</p>
                                </div>
                                <div class="text-center">
                                    <h3 class="text-warning mb-5">3</h3>
                                    <p class="text-muted fs-12">Pending</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6">
                    <div class="card height-equal">
                        <div class="card-header justify-between">
                            <h4 class="">Top Customer</h4>
                            <div class="card-dropdown">
                                <div class="dropdown">
                                    <a class="card-dropdown-icon" href="javascript:void(0);" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                        <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-15">
                            <ul>
                                <li class="d-flex-between mb-15">
                                    <div class="d-flex-items gap-10">
                                        <div class="avatar avatar-md radius-100">
                                            <img class="radius-100" src="{{asset('template_admin/images/avatar/avatar-thumb-002.webp')}}"
                                                alt="image not found">
                                        </div>
                                        <div>
                                            <h6 class="mb-0">John Dawson</h6>
                                            <span class="text-muted">Premium Member</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div class="fs-16 fw-6">15</div>
                                        <span class="fs-14 text-muted">Order</span>
                                    </div>
                                </li>
                                <li class="d-flex-between mb-15">
                                    <div class="d-flex-items gap-10">
                                        <div class="avatar avatar-md radius-100 bg-primary-transparent text-primary fw-7">
                                            MD
                                        </div>
                                        <div>
                                            <h6 class="mb-0">John Dawson</h6>
                                            <span class="text-muted">Premium Member</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div class="fs-16 fw-6">15</div>
                                        <span class="fs-14 text-muted">Order</span>
                                    </div>
                                </li>
                                <li class="d-flex-between mb-15">
                                    <div class="d-flex-items gap-10">
                                        <div class="avatar avatar-md radius-100">
                                            <img class="radius-100" src="{{asset('template_admin/images/avatar/avatar-thumb-002.webp')}}"
                                                alt="image not found">
                                        </div>
                                        <div>
                                            <h6 class="mb-0">John Dawson</h6>
                                            <span class="text-muted">Premium Member</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div class="fs-16 fw-6">15</div>
                                        <span class="fs-14 text-muted">Order</span>
                                    </div>
                                </li>
                                <li class="d-flex-between mb-15">
                                    <div class="d-flex-items gap-10">
                                        <div class="avatar avatar-md radius-100 bg-primary-transparent text-primary fw-7">
                                            MD
                                        </div>
                                        <div>
                                            <h6 class="mb-0">John Dawson</h6>
                                            <span class="text-muted">Premium Member</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div class="fs-16 fw-6">15</div>
                                        <span class="fs-14 text-muted">Order</span>
                                    </div>
                                </li>
                                <li class="d-flex-between mb-15">
                                    <div class="d-flex-items gap-10">
                                        <div class="avatar avatar-md radius-100">
                                            <img class="radius-100" src="{{asset('template_admin/images/avatar/avatar-thumb-002.webp')}}"
                                                alt="image not found">
                                        </div>
                                        <div>
                                            <h6 class="mb-0">John Dawson</h6>
                                            <span class="text-muted">Premium Member</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div class="fs-16 fw-6">15</div>
                                        <span class="fs-14 text-muted">Order</span>
                                    </div>
                                </li>
                                <li class="d-flex-between mb-15">
                                    <div class="d-flex-items gap-10">
                                        <div class="avatar avatar-md radius-100 bg-primary-transparent text-primary fw-7">
                                            MD
                                        </div>
                                        <div>
                                            <h6 class="mb-0">John Dawson</h6>
                                            <span class="text-muted">Premium Member</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div class="fs-16 fw-6">15</div>
                                        <span class="fs-14 text-muted">Order</span>
                                    </div>
                                </li>
                                <li class="d-flex-between mb-15">
                                    <div class="d-flex-items gap-10">
                                        <div class="avatar avatar-md radius-100">
                                            <img class="radius-100" src="{{asset('template_admin/images/avatar/avatar-thumb-002.webp')}}"
                                                alt="image not found">
                                        </div>
                                        <div>
                                            <h6 class="mb-0">John Dawson</h6>
                                            <span class="text-muted">Premium Member</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div class="fs-16 fw-6">15</div>
                                        <span class="fs-14 text-muted">Order</span>
                                    </div>
                                </li>
                                <li class="d-flex-between">
                                    <div class="d-flex-items gap-10">
                                        <div class="avatar avatar-md radius-100 bg-primary-transparent text-primary fw-7">
                                            MD
                                        </div>
                                        <div>
                                            <h6 class="mb-0">John Dawson</h6>
                                            <span class="text-muted">Premium Member</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div class="fs-16 fw-6">15</div>
                                        <span class="fs-14 text-muted">Order</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-12">
                    <div class="card height-equal">
                        <div class="card-header justify-between">
                            <h4 class="">Top Selling Categories</h4>
                            <div class="card-dropdown">
                                <div class="dropdown">
                                    <a class="card-dropdown-icon" href="javascript:void(0);" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">Today</a>
                                        <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                        <a class="dropdown-item active" href="javascript:void(0);">This
                                            Month</a>
                                        <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-15">
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th class=""> Category</th>
                                            <th class="">Revenue</th>
                                            <th class="">Orders</th>
                                            <th class="">Avg. Order</th>
                                            <th class="">Growth</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="mb-5">Electronics</h6>
                                                <span class="text-muted">Phones, Laptops, TVs</span>
                                            </td>
                                            <td class="text-end fw-6">$24,850</td>
                                            <td class="text-end">182</td>
                                            <td class="text-end">$136.54</td>
                                            <td class="text-end">
                                                <span class="text-success"><i class="ri-arrow-up-line mr-5"></i>
                                                    12.5%</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h6 class="mb-5">Fashion</h6>
                                                <span class="text-muted">Clothing, Shoes, Bags</span>
                                            </td>
                                            <td class="text-end fw-6">$18,420</td>
                                            <td class="text-end">254</td>
                                            <td class="text-end">$72.52</td>
                                            <td class="text-end">
                                                <span class="text-success"><i class="ri-arrow-up-line"></i>
                                                    8.2%</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h6 class="mb-5">Home & Kitchen</h6>
                                                <span class="text-muted">Furniture, Appliances</span>
                                            </td>
                                            <td class="text-end fw-6">$12,750</td>
                                            <td class="text-end">98</td>
                                            <td class="text-end">$130.10</td>
                                            <td class="text-end">
                                                <span class="text-danger"><i class="ri-arrow-down-line"></i>
                                                    3.2%</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h6 class="mb-5">Beauty</h6>
                                                <span class="text-muted">Skincare, Makeup</span>
                                            </td>
                                            <td class="text-end fw-6">$9,680</td>
                                            <td class="text-end">167</td>
                                            <td class="text-end">$57.96</td>
                                            <td class="text-end">
                                                <span class="text-success"><i class="ri-arrow-up-line"></i>
                                                    21.7%</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h6 class="mb-5">Sports</h6>
                                                <span class="text-muted">Equipment, Activewear</span>
                                            </td>
                                            <td class="text-end fw-6">$7,350</td>
                                            <td class="text-end">89</td>
                                            <td class="text-end">$82.58</td>
                                            <td class="text-end">
                                                <span class="text-success"><i class="ri-arrow-up-line"></i>
                                                    5.5%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-5">Books & Media</h6>
                                                <span class="text-muted">Books, eBooks, Audiobooks</span>
                                            </td>
                                            <td class="text-end fw-6">$6,240</td>
                                            <td class="text-end">312</td>
                                            <td class="text-end">$20.00</td>
                                            <td class="text-end">
                                                <span class="text-success"><i class="ri-arrow-up-line"></i>
                                                    15.5%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-5">Grocery</h6>
                                                <span class="text-muted">Food, Beverages, Essentials</span>
                                            </td>
                                            <td class="text-end fw-6">$15,670</td>
                                            <td class="text-end">428</td>
                                            <td class="text-end">$36.61</td>
                                            <td class="text-end">
                                                <span class="text-success"><i class="ri-arrow-up-line"></i>
                                                    4.3%</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header justify-between">
                            <h4 class="">Recent Orders</h4>
                            <div class="card-dropdown">
                                <div class="dropdown">
                                    <a class="card-dropdown-icon" href="javascript:void(0);" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                        <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-15">
                            <div class="table-responsive">
                                <table class="table text-nowrap w-100">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Rating</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="ecommerce-order-details.html">#DN-2024-001</a></td>
                                            <td>
                                                <div class="d-flex-items gap-10">
                                                    <div class="avatar avatar-md radius-100">
                                                        <img class="radius-100"
                                                            src="{{asset('template_admin/images/avatar/avatar-thumb-001.webp')}}"
                                                            alt="image not found">
                                                    </div>
                                                    <div>
                                                        <h6>Sarah Johnson</h6>
                                                        <span class="fs-12 text-muted"><a
                                                                href="https://demo.topylo.com/cdn-cgi/l/email-protection"
                                                                class="__cf_email__"
                                                                data-cfemail="fe8d9f8c9f96949196908d9190be939f9792d09d9193">[email&#160;protected]</a></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex-items gap-10">
                                                    <div class="avatar avatar-md radius-6">
                                                        <img class="radius-6" src="{{asset('template_admin/images/product/item3.png')}}"
                                                            alt="image not found">
                                                    </div>
                                                    <span class="fw-6 text-muted">Wireless Earbuds Pro</span>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>$129.99</td>
                                            <td><span class="badge bg-label-success">Delivered</span></td>
                                            <td>
                                                <div class="rating">
                                                    <i class="ri-star-fill text-warning"></i>
                                                    <i class="ri-star-fill text-warning"></i>
                                                    <i class="ri-star-fill text-warning"></i>
                                                    <i class="ri-star-fill text-warning"></i>
                                                    <i class="ri-star-half-fill text-warning"></i>
                                                    <span class="ms-1">4.5</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex-items gap-10">
                                                    <a class="btn-icon btn-success-light"
                                                        href="ecommerce-order-details.html" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="View">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                    <a class="btn-icon btn-info-light" href="ecommerce-order-details.html"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Edit">
                                                        <i class="ri-edit-line"></i>
                                                    </a>
                                                    <a class="btn-icon btn-danger-light" href="javascript:void(0);"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Delete">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><a href="ecommerce-order-details.html">#DN-2024-002</a></td>
                                            <td>
                                                <div class="d-flex-items gap-10">
                                                    <div class="avatar avatar-md radius-100">
                                                        <img class="radius-100"
                                                            src="{{asset('template_admin/images/avatar/avatar-thumb-002.webp')}}"
                                                            alt="image not found">
                                                    </div>
                                                    <div>
                                                        <h6>Michael Kim</h6>
                                                        <span class="fs-12 text-muted"><a
                                                                href="https://demo.topylo.com/cdn-cgi/l/email-protection"
                                                                class="__cf_email__"
                                                                data-cfemail="77041605161f1d181f19041819371a161e1b5914181a">[email&#160;protected]</a></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex-items gap-10">
                                                    <div class="avatar avatar-md radius-6">
                                                        <img class="radius-6" src="{{asset('template_admin/images/product/item4.png')}}"
                                                            alt="image not found">
                                                    </div>
                                                    <span class="fw-6 text-muted">Smart Watch Series 5</span>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>$129.99</td>
                                            <td><span class="badge bg-label-info">Shipped</span></td>
                                            <td>
                                                <div class="rating">
                                                    <i class="ri-star-fill text-warning"></i>
                                                    <i class="ri-star-fill text-warning"></i>
                                                    <i class="ri-star-fill text-warning"></i>
                                                    <i class="ri-star-fill text-warning"></i>
                                                    <i class="ri-star-half-fill text-warning"></i>
                                                    <span class="ms-1">4.5</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex-items gap-10">
                                                    <a class="btn-icon btn-success-light"
                                                        href="ecommerce-order-details.html" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="View">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                    <a class="btn-icon btn-info-light" href="ecommerce-order-details.html"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Edit">
                                                        <i class="ri-edit-line"></i>
                                                    </a>
                                                    <a class="btn-icon btn-danger-light" href="javascript:void(0);"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Delete">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><a href="ecommerce-order-details.html">#DN-2024-003</a></td>
                                            <td>
                                                <div class="d-flex-items gap-10">
                                                    <div class="avatar avatar-md radius-100">
                                                        <img class="radius-100"
                                                            src="{{asset('template_admin/images/avatar/avatar-thumb-003.webp')}}"
                                                            alt="image not found">
                                                    </div>
                                                    <div>
                                                        <h6>Emily Chen</h6>
                                                        <span class="fs-12 text-muted"><a
                                                                href="https://demo.topylo.com/cdn-cgi/l/email-protection"
                                                                class="__cf_email__"
                                                                data-cfemail="fe8d9f8c9f96949196908d9190be939f9792d09d9193">[email&#160;protected]</a></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex-items gap-10">
                                                    <div class="avatar avatar-md radius-6">
                                                        <img class="radius-6" src="{{asset('template_admin/images/product/item5.png')}}"
                                                            alt="image not found">
                                                    </div>
                                                    <span class="fw-6 text-muted">Bluetooth Speaker</span>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>$129.99</td>
                                            <td><span class="badge bg-label-warning">Processing</span></td>
                                            <td>
                                                <div class="rating">
                                                    <i class="ri-star-line text-muted"></i>
                                                    <i class="ri-star-line text-muted"></i>
                                                    <i class="ri-star-line text-muted"></i>
                                                    <i class="ri-star-line text-muted"></i>
                                                    <i class="ri-star-line text-muted"></i>
                                                    <span class="ms-1">-</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex-items gap-10">
                                                    <a class="btn-icon btn-success-light"
                                                        href="ecommerce-order-details.html" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="View">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                    <a class="btn-icon btn-info-light" href="ecommerce-order-details.html"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Edit">
                                                        <i class="ri-edit-line"></i>
                                                    </a>
                                                    <a class="btn-icon btn-danger-light" href="javascript:void(0);"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Delete">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><a href="ecommerce-order-details.html">#DN-2024-004</a></td>
                                            <td>
                                                <div class="d-flex-items gap-10">
                                                    <div class="avatar avatar-md radius-100">
                                                        <img class="radius-100"
                                                            src="{{asset('template_admin/images/avatar/avatar-thumb-004.webp')}}"
                                                            alt="image not found">
                                                    </div>
                                                    <div>
                                                        <h6>David Lopez</h6>
                                                        <span class="fs-12 text-muted"><a
                                                                href="https://demo.topylo.com/cdn-cgi/l/email-protection"
                                                                class="__cf_email__"
                                                                data-cfemail="f5869487949d9f9a9d9b869a9bb598949c99db969a98">[email&#160;protected]</a></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex-items gap-10">
                                                    <div class="avatar avatar-md radius-6">
                                                        <img class="radius-6" src="{{asset('template_admin/images/product/item6.png')}}"
                                                            alt="image not found">
                                                    </div>
                                                    <span class="fw-6 text-muted">Gaming Mouse</span>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>$129.99</td>
                                            <td><span class="badge bg-label-danger">Returned</span></td>
                                            <td>
                                                <div class="rating">
                                                    <i class="ri-star-fill text-warning"></i>
                                                    <i class="ri-star-line text-warning"></i>
                                                    <i class="ri-star-line text-warning"></i>
                                                    <i class="ri-star-line text-warning"></i>
                                                    <i class="ri-star-line text-warning"></i>
                                                    <span class="ms-1">4.5</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex-items gap-10">
                                                    <a class="btn-icon btn-success-light"
                                                        href="ecommerce-order-details.html" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="View">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                    <a class="btn-icon btn-info-light" href="ecommerce-order-details.html"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Edit">
                                                        <i class="ri-edit-line"></i>
                                                    </a>
                                                    <a class="btn-icon btn-danger-light" href="javascript:void(0);"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Delete">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><a href="ecommerce-order-details.html">#DN-2024-005</a></td>
                                            <td>
                                                <div class="d-flex-items gap-10">
                                                    <div class="avatar avatar-md radius-100">
                                                        <img class="radius-100"
                                                            src="{{asset('template_admin/images/avatar/avatar-thumb-005.webp')}}"
                                                            alt="image not found">
                                                    </div>
                                                    <div>
                                                        <h6>Jessica Williams</h6>
                                                        <span class="fs-12 text-muted"><a
                                                                href="https://demo.topylo.com/cdn-cgi/l/email-protection"
                                                                class="__cf_email__"
                                                                data-cfemail="e5968497848d8f8a8d8b968a8ba588848c89cb868a88">[email&#160;protected]</a></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex-items gap-10">
                                                    <div class="avatar avatar-md radius-6">
                                                        <img class="radius-6" src="{{asset('template_admin/images/product/item7.png')}}"
                                                            alt="image not found">
                                                    </div>
                                                    <span class="fw-6 text-muted">Fitness Tracker</span>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>$129.99</td>
                                            <td><span class="badge bg-label-danger">On Hold</span></td>
                                            <td>
                                                <div class="rating">
                                                    <i class="ri-star-line text-muted"></i>
                                                    <i class="ri-star-line text-muted"></i>
                                                    <i class="ri-star-line text-muted"></i>
                                                    <i class="ri-star-line text-muted"></i>
                                                    <i class="ri-star-line text-muted"></i>
                                                    <span class="ms-1">-</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex-items gap-10">
                                                    <a class="btn-icon btn-success-light"
                                                        href="ecommerce-order-details.html" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="View">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                    <a class="btn-icon btn-info-light" href="ecommerce-order-details.html"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Edit">
                                                        <i class="ri-edit-line"></i>
                                                    </a>
                                                    <a class="btn-icon btn-danger-light" href="javascript:void(0);"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Delete">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts_js')
    <script src="{{ asset('template_admin/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template_admin/js/vendor/jquery-3.7.0.js') }}"></script>
    <script src="{{ asset('template_admin/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('template_admin/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('template_admin/js/plugins/simplebar-active.js') }}"></script>
    <script src="{{ asset('template_admin/js/vendor/height-equal.js') }}"></script>
    <script src="{{ asset('template_admin/js/vendor/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('template_admin/js/vendor/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('template_admin/js/vendor/backtotop.js') }}"></script>
    <script src="{{ asset('template_admin/js/plugins/smooth-scrollbar.js') }}"></script>
    <script src="{{ asset('template_admin/js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('template_admin/js/plugins/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('template_admin/js/plugins/world-merc.js') }}"></script>
    <script src="{{ asset('template_admin/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('template_admin/js/vendor/ecommerce-dashboard.js') }}"></script>
    <script src="{{ asset('template_admin/js/main.js') }}"></script>
    <script src="{{ asset('template_admin/js/vendor/sidebar.js') }}"></script>
@endsection