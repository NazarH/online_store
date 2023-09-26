<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::group(['namespace' => 'Profile', 'prefix' => 'profile'], function(){
    Route::get('', [AuthController::class, 'index'])->name('profile.index');
    Route::post('/update/{id}', [AuthController::class, 'update'])->name('profile.personal');
});
