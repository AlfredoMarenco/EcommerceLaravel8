<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\VariantController;

//Rutas aisladas
Route::get('',[HomeController::class,'index'])->name('admin.home');
//Rutas con recursos
Route::resource('products', ProductController::class)->names('admin.products');
Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::resource('colors', ColorController::class)->names('admin.colors');
Route::resource('sizes', SizeController::class)->names('admin.sizes');
Route::resource('variants', VariantController::class)->names('admin.variants');

