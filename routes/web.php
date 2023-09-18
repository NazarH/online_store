<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::prefix('profile')->group(function () {
    Route::get('', [AuthController::class, 'index'])->name('profile.index');
    Route::post('/update/{id}', [AuthController::class, 'update'])->name('profile.personal');
});

Route::prefix('basket')->group(function () {
    Route::match(['GET', 'POST'],'', [BasketController::class, 'basketIndex'])->name('pages.basket');
    Route::post('/delete', [BasketController::class, 'basketDelete'])->name('pages.basket.delete');
});

Route::prefix('order')->group(function () {
    Route::get('', [OrderController::class, 'orderIndex'])->name('order.index');
    Route::post('', [OrderController::class, 'orderPost'])->name('order.post');
});

Route::prefix('orders')->group(function () {
    Route::get('', [OrderController::class, 'ordersIndex'])->name('orders.index');
});

Route::prefix('/')->group(function () {
    Route::get('/', [PagesController::class, 'redirect'])->name('pages.redirect');
    Route::get('main-page', [PagesController::class, 'index'])->name('pages.index');
    Route::get('search', [PagesController::class, 'search'])->name('pages.search');
});

Route::group(['namespace' => 'Products', 'prefix' => 'products'], function(){
    Route::get('{link}/{id}', [ProductController::class, 'index'])->name('products.index');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/banners', [AdminController::class, 'bannerIndex'])->name('admin.banner.index');
    Route::post('/banners/create', [AdminController::class, 'bannerCreate'])->name('admin.banner.create');

    Route::get('/categories', [AdminController::class, 'categoryIndex'])->name('admin.category.index');
    Route::post('/categories/create', [AdminController::class, 'categoryCreate'])->name('admin.category.create');

    Route::get('/products', [AdminController::class, 'productIndex'])->name('admin.product.index');
    Route::match(['GET', 'POST'], '/products/create', [AdminController::class, 'productCreate'])->name('admin.product.create');
    Route::match(['GET', 'POST'], '/products/{id}', [AdminController::class, 'productUpdate'])->name('admin.product.update');
    Route::post('/products/{id}/add-attr', [AdminController::class, 'productAddAttr'])->name('admin.product.add');

    Route::get('/orders', [AdminController::class, 'orderIndex'])->name('admin.order.index');
    Route::get('/orders/{id}', [AdminController::class, 'orderInfo'])->name('admin.order.info');
    Route::get('/orders/{id}/accept', [AdminController::class, 'orderAccept'])->name('admin.order.accept');
    Route::delete('/orders/{id}/delete', [AdminController::class, 'orderDelete'])->name('admin.order.delete');

    Route::match(['GET', 'POST'],'/users', [AdminController::class, 'userIndex'])->name('admin.user.index');
    Route::post('/users/{id}/change-role', [AdminController::class, 'userRole'])->name('admin.user.role');
    Route::delete('/users/{id}/delete', [AdminController::class, 'userDelete'])->name('admin.user.delete');

    Route::get('/reviews', [AdminController::class, 'reviewIndex'])->name('admin.review.index');
    Route::get('/reviews/{id}/accept', [AdminController::class, 'reviewAccept'])->name('admin.review.accept');
    Route::delete('/reviews/{id}/delete', [AdminController::class, 'reviewDelete'])->name('admin.review.delete');
});





