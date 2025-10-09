@extends('admin.layouts.layout')
@section('content')
    <div class="app-content-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-box d-flex-between flex-wrap gap-15">
                        <h1 class="page-title fs-18 lh-1">Mi Cuenta</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-example1 mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Usuario</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mi Cuenta</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="customer-nav mb-25 mobile-nav">
                        <ul class="d-flex-items gap-10">
                            <li class="active"><a class="btn btn-primary" href="{{ route('admin.profile') }}">Descripción General</a></li>
                            <li class=""><a class="btn btn-light" href="#">Tarjetas y Dirección</a></li>
                            <li class=""><a class="btn btn-light" href="#">Configuración</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header justify-between">
                            <h4 class="">Información Personal</h4>
                            <div class="card-dropdown">
                                <div class="dropdown">
                                    <a class="card-dropdown-icon" href="javascript:void(0);" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">Editar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-15">
                            <div class="text-center mb-10">
                                <div class="avatar avatar-big radius-100">
                                    <img class="radius-100" src="{{ asset('template_admin/images/avatar/avatar-thumb-001.webp')}}"
                                        alt="imagen no disponible">
                                </div>
                            </div>
                            <div class="profile-info text-center mb-15">
                                <h3 class="mb-5">{{ Auth::user()->name }}</h3>
                                <h6 class="text-body mb-10">{{ Auth::user()->email }}</h6>
                                <div class="d-flex-center gap-15">
                                    <a href="javascript:void(0);" class="btn-icon btn-warning-light fs-16">
                                        <i class="ri-twitter-x-line"></i>
                                    </a><a href="javascript:void(0);" class="btn-icon btn-success-light fs-16">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn-icon btn-info-light fs-16">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn-icon btn-danger-light fs-16">
                                        <i class="ri-whatsapp-line"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn-icon btn-primary-light fs-16">
                                        <i class="ri-telegram-2-fill"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Nombres</td>
                                            <td>
                                                <div class="text-heading">{{ Auth::user()->name }}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Date of Join</td>
                                            <td>
                                                <div class="text-heading">2024-06-28</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>
                                                <div class="text-heading"><a href="#"
                                                        class="__cf_email__">{{ Auth::user()->email }}</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td>
                                                <div class="text-heading">+1(800) 642 7676</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gender</td>
                                            <td>
                                                <div class="text-heading">Male</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>
                                                <div class="badge bg-label-success">Active
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Address:</td>
                                            <td>123 Maple Street, Springfield, IL 62704, United States</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-xl-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body mini-card-body d-flex align-center gap-16">
                                    <div class="avatar avatar-xl bg-primary-transparent text-primary">
                                        <i class="ri-shopping-bag-3-line fs-42"></i>
                                    </div>
                                    <div class="card-content">
                                        <span class="d-block fs-16 mb-5">Total Orders</span>
                                        <h2 class="mb-5">98.5k</h2>
                                        <span class="text-success">+1.24%<i
                                                class="ri-arrow-up-line ml-5 d-inline-block"></i></span>
                                        <span class="fs-12 text-muted ml-5">This week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body mini-card-body d-flex align-center gap-16">
                                    <div class="avatar avatar-xl bg-warning-transparent text-warning">
                                        <i class="ri-time-line fs-42"></i>
                                    </div>
                                    <div class="card-content">
                                        <span class="d-block fs-16 mb-5">Pending Orders</span>
                                        <h2 class="mb-5">12</h2>
                                        <span class="text-warning">+2 pending<i
                                                class="ri-arrow-up-line ml-5 d-inline-block"></i></span>
                                        <span class="fs-12 text-muted ml-5">In Dispatch</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body mini-card-body d-flex align-center gap-16">
                                    <div class="avatar avatar-xl bg-success-transparent text-success">
                                        <i class="ri-checkbox-circle-line fs-42"></i>
                                    </div>
                                    <div class="card-content">
                                        <span class="d-block fs-16 mb-5">Completed Orders</span>
                                        <h2 class="mb-5">86</h2>
                                        <span class="text-success">+8.5%<i
                                                class="ri-arrow-up-line ml-5 d-inline-block"></i></span>
                                        <span class="fs-12 text-muted ml-5">This month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body mini-card-body d-flex align-center gap-16">
                                    <div class="avatar avatar-xl bg-purple-transparent text-purple">
                                        <i class="ri-money-dollar-circle-line fs-42"></i>
                                    </div>
                                    <div class="card-content">
                                        <span class="d-block fs-16 mb-5">Total Spent</span>
                                        <h2 class="mb-5">$12,450</h2>
                                        <span class="text-success">+15%<i
                                                class="ri-arrow-up-line ml-5 d-inline-block"></i></span>
                                        <span class="fs-12 text-muted ml-5">vs last year</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header justify-between">
                                    <h4>Order List</h4>
                                </div>
                                <div class="card-body pt-15">
                                    <div class="table-responsive">
                                        <table id="dataTableDefault" class="table text-nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Order Date</th>
                                                    <th>Delivery Date</th>
                                                    <th>Payment Status</th>
                                                    <th>Order Status</th>
                                                    <th>Total Spent</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#10025</td>
                                                    <td>Apr 25, 2025</td>
                                                    <td>Apr 29, 2025</td>
                                                    <td><span class="text-black fw-5">Credit Card</span></td>
                                                    <td><span class="badge bg-label-success">Paid</span>
                                                    </td>
                                                    <td>$129.99</td>
                                                    <td>
                                                        <div class="d-flex-items gap-5">
                                                            <a class="btn-icon btn-success-light"
                                                                href="ecommerce-order-details.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <button class="btn-icon btn-danger-light removeRow"
                                                                type="button">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#10026</td>
                                                    <td>Apr 26, 2025</td>
                                                    <td>May 1, 2025</td>
                                                    <td><span class="text-black fw-5">PayPal</span></td>
                                                    <td><span class="badge bg-label-success">Paid</span>
                                                    </td>
                                                    <td>$89.50</td>
                                                    <td>
                                                        <div class="d-flex-items gap-5">
                                                            <a class="btn-icon btn-success-light"
                                                                href="ecommerce-order-details.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <button class="btn-icon btn-danger-light removeRow"
                                                                type="button">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#10027</td>
                                                    <td>Apr 27, 2025</td>
                                                    <td>Apr 30, 2025</td>
                                                    <td><span class="text-black fw-5">Bank Transfer</span></td>
                                                    <td><span class="badge bg-label-warning">Pending</span>
                                                    </td>
                                                    <td>$245.75</td>
                                                    <td>
                                                        <div class="d-flex-items gap-5">
                                                            <a class="btn-icon btn-success-light"
                                                                href="ecommerce-order-details.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <button class="btn-icon btn-danger-light removeRow"
                                                                type="button">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#10028</td>
                                                    <td>Apr 28, 2025</td>
                                                    <td>May 3, 2025</td>
                                                    <td><span class="text-black fw-5">Credit Card</span></td>
                                                    <td><span class="badge bg-label-danger">Failed</span>
                                                    </td>
                                                    <td>$179.99</td>
                                                    <td>
                                                        <div class="d-flex-items gap-5">
                                                            <a class="btn-icon btn-success-light"
                                                                href="ecommerce-order-details.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <button class="btn-icon btn-danger-light removeRow"
                                                                type="button">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#10029</td>
                                                    <td>Apr 29, 2025</td>
                                                    <td>May 5, 2025</td>
                                                    <td><span class="text-black fw-5">Cash on Delivery</span>
                                                    </td>
                                                    <td><span class="badge bg-label-info">Processing</span>
                                                    </td>
                                                    <td>$65.20</td>
                                                    <td>
                                                        <div class="d-flex-items gap-5">
                                                            <a class="btn-icon btn-success-light"
                                                                href="ecommerce-order-details.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <button class="btn-icon btn-danger-light removeRow"
                                                                type="button">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#10030</td>
                                                    <td>Apr 30, 2025</td>
                                                    <td>May 4, 2025</td>
                                                    <td><span class="text-black fw-5">Stripe</span></td>
                                                    <td><span class="badge bg-label-success">Paid</span>
                                                    </td>
                                                    <td>$320.00</td>
                                                    <td>
                                                        <div class="d-flex-items gap-5">
                                                            <a class="btn-icon btn-success-light"
                                                                href="ecommerce-order-details.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <button class="btn-icon btn-danger-light removeRow"
                                                                type="button">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
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
        </div>
    </div>
@endsection
