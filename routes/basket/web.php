<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasketController;

Route::group(['namespace' => 'Basket', 'prefix' => 'basket'], function(){
    Route::get('', [BasketController::class, 'basketIndex'])->name('pages.basket.index');
    Route::post('', [BasketController::class, 'basketAdd'])->name('pages.basket.add');
    Route::post('/delete', [BasketController::class, 'basketDelete'])->name('pages.basket.delete');
});
