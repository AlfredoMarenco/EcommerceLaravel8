<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CollectionController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ConfigurationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VariantController;
use App\Http\Controllers\Admin\RolController;
use App\Http\Controllers\Admin\TagController;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');
Route::get('variants', [VariantController::class, 'index'])->name('admin.variants.index');
Route::get('variants/toassign/{product}', [VariantController::class, 'create'])->name('admin.variants.create');
Route::post('variants/toassign/{product}/store', [VariantController::class, 'store'])->name('admin.variants.store');
Route::post('uploadimage',[PostController::class,'uploadImage'])->name('admin.posts.upload');
Route::resource('user', UserController::class)->only('index', 'edit', 'update')->names('admin.users');
Route::resource('roles', RolController::class)->names('admin.roles');
Route::resource('products', ProductController::class)->except('show')->names('admin.products');
Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');
Route::resource('colors', ColorController::class)->except('show')->names('admin.colors');
Route::resource('sizes', SizeController::class)->except('show')->names('admin.sizes');
Route::resource('orders', OrderController::class)->except('create','store')->names('admin.orders');
Route::resource('post', PostController::class)->names('admin.posts');
Route::resource('tags', TagController::class)->except('show')->names('admin.tags');
Route::resource('collections', CollectionController::class)->except('show')->names('admin.collections');
Route::resource('configurations', ConfigurationController::class)->except('show')->names('admin.configurations');

