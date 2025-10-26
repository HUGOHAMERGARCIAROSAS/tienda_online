<?php

use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Auth\ClientLoginController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categories/{slug}', [HomeController::class, 'showCategories'])->name('frontend.categories.show');
Route::get('/products/{slug}', [HomeController::class, 'showProducts'])->name('frontend.product.show');
Route::get('/nosotros', [HomeController::class, 'nosotros'])->name('frontend.nosotros');
Route::get('/categories', [HomeController::class, 'categories'])->name('frontend.categories');
Route::get('/featured_products', [HomeController::class, 'featured_products'])->name('featured_products');
Route::post('/suscriptores', [HomeController::class, 'suscriptores'])->name('frontend.suscriptores');
Route::get('/new_products', [HomeController::class, 'new_products'])->name('new_products');
Route::get('/reset_password', [HomeController::class, 'reset_password'])->name('reset_password');
Route::post('/reset_password', [HomeController::class, 'reset_password_store'])->name('reset_password');

Route::get('/reset-password/{token}', [HomeController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [HomeController::class, 'reset'])->name('password.update');



Route::middleware('guest:web')->group(function () {
    Route::get('/login', [ClientLoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [ClientLoginController::class, 'login']);
    Route::get('/register',[ClientLoginController::class, 'showRegisterForm'])->name('register');
    Route::post('/register',[ClientLoginController::class, 'register'])->name('register');
});

Route::middleware('auth:web')->group(function () {
    Route::get('/client/dashboard', [ClientLoginController::class, 'dashboard'])->name('client.dashboard');
    Route::get('/cart', [HomeController::class, 'cart'])->name('frontend.cart');
    Route::post('cart_store', [HomeController::class, 'cartStore'])->name('frontend.cart.store');
    Route::get('/pedido/exito/{order_id}', [HomeController::class, 'pedido_exitoso'])->name('frontend.pedido_exitoso');
    Route::get('/mi_cuenta', [ClientLoginController::class, 'dashboard'])->name('frontend.mi_cuenta');
    Route::post('/mi_cuenta/{id}', [ClientLoginController::class, 'update'])->name('client.update');
    Route::get('/mis_favoritos', [ClientLoginController::class, 'mis_favoritos'])->name('frontend.mis_favoritos');
    Route::get('/lista_de_deseos', [ClientLoginController::class, 'lista_de_deseos'])->name('frontend.lista_de_deseos');
    Route::get('/mis_pedidos', [ClientLoginController::class, 'mis_pedidos'])->name('frontend.mis_pedidos');
    Route::post('/logout', [ClientLoginController::class, 'logout'])->name('logout');
});



Route::prefix('admin')->group(function () {

    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
        Route::post('/login', [AdminLoginController::class, 'login']);
        Route::get('/register',[AdminLoginController::class, 'showRegisterForm'])->name('admin.register');
        Route::post('/register',[AdminLoginController::class, 'register'])->name('admin.register');
    });

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::get('/profile', [ProfileController::class, 'showProfile'])->name('admin.profile');

        Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
        Route::post('admin/categories', [CategoryController::class, 'store'])->name('admin.categories.store');
        Route::post('admin/categories/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
        Route::delete('admin/categories/delete/{id}', [CategoryController::class, 'delete'])->name('admin.categories.delete');
        Route::post('admin/categories/status/{id}', [CategoryController::class, 'updateStatus'])->name('admin.categories.status');

        Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');
        Route::get('admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
        Route::get('admin_products_data', [ProductController::class, 'getData'])->name('admin.products.data');
        Route::post('admin/products/store', [ProductController::class, 'store'])->name('admin.products.store');
        Route::get('admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');
        Route::post('admin/products/update/{id}', [ProductController::class, 'update'])->name('admin.products.update');
        Route::delete('admin/products/delete/{id}', [ProductController::class, 'delete'])->name('admin.products.delete');
        Route::post('admin/products/status/{id}', [ProductController::class, 'updateStatus'])->name('admin.products.status');
        Route::post('admin/products/deleteImage', [ProductController::class, 'deleteImage'])->name('admin.products.deleteImage');

        Route::get('/frontend/sliders', [FrontendController::class, 'sliders'])->name('admin.frontend.sliders');
        Route::post('frontend/sliders', [FrontendController::class, 'storeSliders'])->name('admin.frontend.sliders.store');
        Route::post('frontend/sliders/{id}', [FrontendController::class, 'updateSlider'])->name('admin.frontend.sliders.update');
        Route::delete('frontend/sliders/delete/{id}', [FrontendController::class, 'deleteSlider'])->name('admin.frontend.sliders.delete');

        Route::get('/admin/brands', [BrandController::class, 'index'])->name('admin.brands.index');
        Route::post('admin/brands', [BrandController::class, 'store'])->name('admin.brands.store');
        Route::post('admin/brands/{id}', [BrandController::class, 'update'])->name('admin.brands.update');
        Route::delete('admin/brands/delete/{id}', [BrandController::class, 'delete'])->name('admin.brands.delete');
        Route::post('admin/brands/status/{id}', [BrandController::class, 'updateStatus'])->name('admin.brands.status');

        Route::get('/admin/settings', [SettingController::class, 'index'])->name('admin.settings.index');
        Route::put('admin/settings/{id}', [SettingController::class, 'update'])->name('admin.settings.update');


        // admin.clients.index
        Route::get('/admin/clients', [ClientController::class, 'index'])->name('admin.clients.index');
        Route::post('admin/clients', [ClientController::class, 'store'])->name('admin.clients.store');
        Route::post('admin/clients/{id}', [ClientController::class, 'update'])->name('admin.clients.update');
        Route::delete('admin/clients/delete/{id}', [ClientController::class, 'delete'])->name('admin.clients.delete');
        Route::post('admin/clients/status/{id}', [ClientController::class, 'updateStatus'])->name('admin.clients.status');

        // admin.orders.index
        Route::get('/admin/orders', [OrderController::class, 'index'])->name('admin.orders.index');
        Route::get('/admin/orders/edit/{id}', [OrderController::class, 'edit'])->name('admin.orders.edit');


        Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    });
});
