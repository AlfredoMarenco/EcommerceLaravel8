<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;

Route::get('/',[HomeController::class,'index'])->name('admin.home');

Route::prefix('products')->group(function () {
    Route::get('/index',[ProductController::class,'index'])->name('admin.products.index');
    Route::get('/create',[ProductController::class,'create'])->name('admin.products.create');
});
