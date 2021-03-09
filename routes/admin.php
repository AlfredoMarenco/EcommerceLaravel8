<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;

Route::get('',[HomeController::class,'index'])->name('admin.home');
Route::resource('products', ProductController::class)->names('admin.products');

