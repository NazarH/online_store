<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::group(['namespace' => 'Order', 'prefix' => 'order'], function(){
    Route::get('', [OrderController::class, 'orderIndex'])->name('order.index');
    Route::post('', [OrderController::class, 'orderPost'])->name('order.post');
});
