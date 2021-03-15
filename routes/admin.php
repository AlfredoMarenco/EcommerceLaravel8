<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VariantController;
use App\Http\Controllers\Admin\RolController;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');
Route::get('variants', [VariantController::class, 'index'])->name('admin.variants.index');
Route::get('variants/toassign/{product}', [VariantController::class, 'create'])->name('admin.variants.create');
Route::post('variants/toassign/{product}/store', [VariantController::class, 'store'])->name('admin.variants.store');
Route::resource('user', UserController::class)->only('index', 'edit', 'update')->names('admin.users');
Route::resource('roles', RolController::class)->names('admin.roles');
Route::resource('products', ProductController::class)->except('show')->names('admin.products');
Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');
Route::resource('colors', ColorController::class)->except('show')->names('admin.colors');
Route::resource('sizes', SizeController::class)->except('show')->names('admin.sizes');
/* Route::resource('variants', VariantController::class)->except('show')->names('admin.variants');
 */
