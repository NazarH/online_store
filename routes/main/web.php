<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::group(['namespace' => 'main', 'prefix' => '/'], function(){
    Route::get('', [PagesController::class, 'redirect'])->name('pages.redirect');
    Route::get('main-page', [PagesController::class, 'index'])->name('pages.index');
    Route::get('search', [PagesController::class, 'search'])->name('pages.search');
});
