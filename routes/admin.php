<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ButtonController;
use App\Http\Controllers\Admin\CatalogueController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CollectionController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\CuponFController;
use App\Http\Controllers\Admin\DetailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MosaicController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VariantController;
use App\Http\Controllers\Admin\RolController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\VideoController;
use Maatwebsite\Excel\Facades\Excel;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');
Route::post('uploadimage', [PostController::class, 'uploadImage'])->name('admin.posts.upload');
Route::get('configurations/slider/delete/{id}', [ConfigurationController::class, 'deleteSlide'])->name('admin.configurations.delete');
Route::get('products/image/delete/{id}', [ProductController::class, 'deleteImage'])->name('admin.product.image.delete');
Route::get('reports', [ReportController::class, 'index'])->name('admin.reports.index');
Route::get('reports/inventary', [ReportController::class, 'inventary'])->name('admin.reports.inventary');
Route::get('reports/inventary/export', [ReportController::class, 'exportInventary'])->name('admin.reports.inventary.export');
Route::get('reports/sales', [ReportController::class, 'sales'])->name('admin.reports.sales');
Route::post('reports/sales/getTableReport', [ReportController::class, 'getTableReport'])->name('admin.reports.sales.getTableReport');
Route::get('reports/sales/exportReportSales', [ReportController::class, 'exportReportSales'])->name('admin.reports.sales.exportReportSales');


Route::resource('user', UserController::class)->except('show')->names('admin.users');
Route::resource('roles', RolController::class)->names('admin.roles');
Route::resource('products', ProductController::class)->except('show')->names('admin.products');
Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');
Route::resource('coupons', CouponController::class)->except('show')->names('admin.coupons');
Route::resource('colors', ColorController::class)->except('show')->names('admin.colors');
Route::resource('sizes', SizeController::class)->except('show')->names('admin.sizes');
Route::resource('orders', OrderController::class)->except('create', 'store')->names('admin.orders');
Route::resource('post', PostController::class)->names('admin.posts');
Route::resource('tags', TagController::class)->except('show')->names('admin.tags');
Route::resource('collections', CollectionController::class)->except('show')->names('admin.collections');
Route::resource('configurations', ConfigurationController::class)->except('show')->names('admin.configurations');
Route::resource('catalogues', CatalogueController::class)->except('show')->names('admin.catalogues');
Route::resource('sliders', SliderController::class)->except('show')->names('admin.sliders');
Route::resource('mosaics', MosaicController::class)->except('show')->names('admin.mosaics');
Route::resource('buttons', ButtonController::class)->except('show')->names('admin.buttons');
Route::resource('cuponfs', CuponFController::class)->except('show')->names('admin.cuponfs');
Route::resource('brands', BrandController::class)->except('show')->names('admin.brands');
Route::resource('videos', VideoController::class)->except('show')->names('admin.videos');
/* Route::resource('reports', ReportController::class)->names('admin.reports'); */
