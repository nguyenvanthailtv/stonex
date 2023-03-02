<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// User website
Route::prefix('/')->group(function(){
    Route::get('/',[HomeController::class,'index'])->name('home');

    Route::get('about-us',[AboutUsController::class,'index'])->name('about_us');

    Route::prefix('product')->group(function(){
        Route::get('/',[ProductController::class,'index'])->name('product');

        Route::get('/detail',[ProductController::class,'product_detail'])->name('product_detail');
    });

});
