<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function(){
    Route::get('/', [IndexController::class, 'index'])->name('admin.index');

    Route::get('/banners', [BannerController::class, 'bannerIndex'])->name('admin.banner.index');
    Route::post('/banners/create', [BannerController::class, 'bannerCreate'])->name('admin.banner.create');

    Route::get('/categories', [CategoryController::class, 'categoryIndex'])->name('admin.category.index');
    Route::post('/categories/create', [CategoryController::class, 'categoryCreate'])->name('admin.category.create');

    Route::get('/products', [AdminProductController::class, 'productIndex'])->name('admin.product.index');
    Route::get('/products/create-form', [AdminProductController::class, 'productCreateForm'])->name('admin.product.create.form');
    Route::post('/products/create', [AdminProductController::class, 'productCreate'])->name('admin.product.create');
    Route::get('/products/form/{product}', [AdminProductController::class, 'productUpdateForm'])->name('admin.product.update.form');
    Route::post('/products/{product}', [AdminProductController::class, 'productUpdate'])->name('admin.product.update');
    Route::post('/products/{id}/add-attr', [AdminProductController::class, 'productAddAttr'])->name('admin.product.add');

    Route::get('/orders', [AdminOrderController::class, 'orderIndex'])->name('admin.order.index');
    Route::get('/orders/{id}', [AdminOrderController::class, 'orderInfo'])->name('admin.order.info');
    Route::get('/orders/{id}/accept', [AdminOrderController::class, 'orderAccept'])->name('admin.order.accept');
    Route::delete('/orders/{id}/delete', [AdminOrderController::class, 'orderDelete'])->name('admin.order.delete');

    Route::get('/users', [UserController::class, 'userIndex'])->name('admin.user.index');
    Route::post('/users/{id}/change-role', [UserController::class, 'userRole'])->name('admin.user.role');
    Route::delete('/users/{id}/delete', [UserController::class, 'userDelete'])->name('admin.user.delete');

    Route::get('/reviews', [ReviewController::class, 'reviewIndex'])->name('admin.review.index');
    Route::get('/reviews/{id}/accept', [ReviewController::class, 'reviewAccept'])->name('admin.review.accept');
    Route::delete('/reviews/{id}/delete', [ReviewController::class, 'reviewDelete'])->name('admin.review.delete');
});
