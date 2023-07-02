<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function (){
    Route::get('/', [SiteController::class, 'index']);
    Route::resource('products', ProductController::class);
});



//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});


require __DIR__.'/auth.php';
