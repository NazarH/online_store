<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::group(['namespace' => 'Products', 'prefix' => 'products'], function(){
    Route::get('{link}/{product}', [ProductController::class, 'index'])->name('products.index');
});
