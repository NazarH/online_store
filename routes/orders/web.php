<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::group(['namespace' => 'Orders', 'prefix' => 'orders'], function(){
    Route::get('', [OrderController::class, 'ordersIndex'])->name('orders.index');
});
