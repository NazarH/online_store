<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::group(['namespace' => 'Products', 'prefix' => 'products'], function(){
    Route::bind('link', function ($value) {
        return Category::where('name', $value)->first();
    });
    Route::get('{link}/{prod}', [ProductController::class, 'index'])->name('products.index');
});
