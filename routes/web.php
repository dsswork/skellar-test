<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function (){
    Route::get('/', [SiteController::class, 'index']);
    Route::resource('products', ProductController::class);
});

require __DIR__.'/auth.php';
