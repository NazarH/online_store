<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\ProductController;
=======
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b

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

<<<<<<< HEAD
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
=======
Route::prefix('/basket')->group(function () {
    Route::match(['GET', 'POST'],'', [BasketController::class, 'basket_index'])->name('pages.basket');
    Route::post('/delete', [BasketController::class, 'basket_delete'])->name('pages.basket.delete');
});

Route::prefix('/order')->group(function () {
    Route::get('', [OrderController::class, 'order_index'])->name('order.index');
    Route::post('', [OrderController::class, 'order_post'])->name('order.post');
});

Route::prefix('/orders')->group(function () {
    Route::get('', [OrderController::class, 'orders_index'])->name('orders.index');
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
});

Route::prefix('/')->group(function () {
    Route::get('/', [PagesController::class, 'redirect'])->name('pages.redirect');
    Route::get('main-page', [PagesController::class, 'index'])->name('pages.index');
<<<<<<< HEAD
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
=======

    Route::get('search', [PagesController::class, 'search'])->name('pages.search');

    Route::match(['GET', 'POST'],'notebooks', [PagesController::class, 'notebooks_index'])->name('pages.notebooks');
    Route::match(['GET', 'POST'],'notebooks/{id}', [PagesController::class, 'notebooks_page'])->name('pages.notebooks.page');

    Route::match(['GET', 'POST'],'books', [PagesController::class, 'books_index'])->name('pages.books');
    Route::match(['GET', 'POST'],'books/{id}', [PagesController::class, 'books_page'])->name('pages.books.page');

    Route::match(['GET', 'POST'],'mobile-phones', [PagesController::class, 'phones_index'])->name('pages.phones');
    Route::match(['GET', 'POST'],'mobile-phones/{id}', [PagesController::class, 'phones_page'])->name('pages.phones.page');

    Route::match(['GET', 'POST'],'televisions', [PagesController::class, 'televisions_index'])->name('pages.televisions');
    Route::match(['GET', 'POST'],'televisions/{id}', [PagesController::class, 'televisions_page'])->name('pages.televisions.page');
});

Route::group(['middleware' => 'admin'], function(){
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');

        Route::get('/statistic', [AdminController::class, 'statistic_index'])->name('admin.statistic.index');

        Route::get('/banners', [AdminController::class, 'banner_index'])->name('admin.banner.index');
        Route::post('/banners/create/top', [AdminController::class, 'banner_top_create'])->name('admin.banner.top.create');
        Route::post('/banners/create/block', [AdminController::class, 'banner_block_create'])->name('admin.banner.block.create');

        Route::match(['GET', 'POST'],'/notebooks', [AdminController::class, 'notebook_index'])->name('admin.notebook.index');
        Route::match(['GET', 'POST'],'/mobile-phones', [AdminController::class, 'mobile_index'])->name('admin.mobile.index');
        Route::match(['GET', 'POST'],'/tvs', [AdminController::class, 'tv_index'])->name('admin.tv.index');
        Route::match(['GET', 'POST'],'/books', [AdminController::class, 'book_index'])->name('admin.book.index');
        Route::get('/reviews', [AdminController::class, 'review_index'])->name('admin.review.index');
        Route::get('/orders', [AdminController::class, 'order_index'])->name('admin.order.index');
        Route::match(['GET', 'POST'],'/users', [AdminController::class, 'user_index'])->name('admin.user.index');

        Route::get('/orders/{id}', [AdminController::class, 'order_info'])->name('admin.order.info');
        Route::get('/orders/{id}/accept', [AdminController::class, 'order_accept'])->name('admin.order.accept');
        Route::delete('/orders/{id}/delete', [AdminController::class, 'order_delete'])->name('admin.order.delete');

        Route::post('/users/{id}/change-role', [AdminController::class, 'user_role'])->name('admin.user.role');
        Route::delete('/users/{id}/delete', [AdminController::class, 'user_delete'])->name('admin.user.delete');

        Route::get('/reviews/{id}/accept', [AdminController::class, 'review_accept'])->name('admin.review.accept');
        Route::delete('/reviews/{id}/delete', [AdminController::class, 'review_delete'])->name('admin.review.delete');

        Route::match(['GET', 'POST'], '/notebook/create/{id?}', [AdminController::class, 'notebook_form'])
            ->name('admin.notebook.form');
        Route::match(['GET', 'POST'], '/mobile-phone/create/{id?}', [AdminController::class, 'mobile_form'])
            ->name('admin.mobile.form');
        Route::match(['GET', 'POST'], '/tv/create/{id?}', [AdminController::class, 'tv_form'])
            ->name('admin.tv.form');
        Route::match(['GET', 'POST'], '/book/create/{id?}', [AdminController::class, 'book_form'])
            ->name('admin.book.form');

        Route::match(['GET', 'POST'], '/notebook/edit/{id}', [AdminController::class, 'notebook_form'])
            ->name('admin.notebook.edit');
        Route::match(['GET', 'POST'], '/mobile-phone/edit/{id}', [AdminController::class, 'mobile_form'])
            ->name('admin.mobile.edit');
        Route::match(['GET', 'POST'], '/tv/edit/{id}', [AdminController::class, 'tv_form'])
            ->name('admin.tv.edit');
        Route::match(['GET', 'POST'], '/book/edit/{id}', [AdminController::class, 'book_form'])
            ->name('admin.book.edit');

        Route::delete('/notebook/delete/{id}', [AdminController::class, 'notebook_delete'])->name('admin.notebook.delete');
        Route::delete('/mobile-phone/delete/{id}', [AdminController::class, 'mobile_delete'])->name('admin.mobile.delete');
        Route::delete('/tv/delete/{id}', [AdminController::class, 'tv_delete'])->name('admin.tv.delete');
        Route::delete('/book/delete/{id}', [AdminController::class, 'book_delete'])->name('admin.book.delete');
    });
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
});





