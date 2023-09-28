<?php

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

    Route::get('/banners', [BannerController::class, 'index'])->name('admin.banner.index');
    Route::post('/banners/create', [BannerController::class, 'create'])->name('admin.banner.create');

    Route::get('/categories', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::post('/categories/create', [CategoryController::class, 'create'])->name('admin.category.create');

    Route::get('/products', [AdminProductController::class, 'index'])->name('admin.product.index');
    Route::get('/products/create-form', [AdminProductController::class, 'createForm'])->name('admin.product.create.form');
    Route::post('/products/create', [AdminProductController::class, 'create'])->name('admin.product.create');
    Route::get('/products/form/{product}', [AdminProductController::class, 'updateForm'])->name('admin.product.update.form');
    Route::post('/products/{product}', [AdminProductController::class, 'update'])->name('admin.product.update');
    Route::post('/products/{id}/add-attr', [AdminProductController::class, 'add'])->name('admin.product.add');

    Route::get('/orders', [AdminOrderController::class, 'index'])->name('admin.order.index');
    Route::get('/orders/{id}', [AdminOrderController::class, 'info'])->name('admin.order.info');
    Route::get('/orders/{id}/accept', [AdminOrderController::class, 'accept'])->name('admin.order.accept');
    Route::delete('/orders/{id}/delete', [AdminOrderController::class, 'delete'])->name('admin.order.delete');

    Route::get('/users', [UserController::class, 'index'])->name('admin.user.index');
    Route::post('/users/{id}/change-role', [UserController::class, 'role'])->name('admin.user.role');
    Route::delete('/users/{id}/delete', [UserController::class, 'delete'])->name('admin.user.delete');

    Route::get('/reviews', [ReviewController::class, 'index'])->name('admin.review.index');
    Route::get('/reviews/{id}/accept', [ReviewController::class, 'accept'])->name('admin.review.accept');
    Route::delete('/reviews/{id}/delete', [ReviewController::class, 'delete'])->name('admin.review.delete');
});
