<?php

use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Auth\ClientLoginController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('guest:web')->group(function () {
    Route::get('/login', [ClientLoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [ClientLoginController::class, 'login']);

    Route::get('/register',[ClientLoginController::class, 'showRegisterForm'])->name('register');
    Route::post('/register',[ClientLoginController::class, 'register'])->name('register');
    Route::get('/categories/{slug}', [HomeController::class, 'showCategories'])->name('frontend.categories.show');
    Route::get('/products/{slug}', [HomeController::class, 'showProducts'])->name('frontend.product.show');

    Route::get('/cart', [HomeController::class, 'cart'])->name('frontend.cart');

    Route::post('/suscriptores', [HomeController::class, 'suscriptores'])->name('frontend.suscriptores');
});



Route::middleware('auth:web')->group(function () {
    Route::get('/client/dashboard', [ClientLoginController::class, 'dashboard'])->name('client.dashboard');
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

        Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    });
});
