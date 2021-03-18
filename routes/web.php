<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ShopController::class, 'index'])->name('shop.home');
Route::get('/product/{product}', [ShopController::class, 'showProduct'])->name('shop.product');
Route::get('/products/{category_id?}', [ShopController::class, 'showProducts'])->name('shop.products');

Route::prefix('/user')->group(function () {
    Route::get('/profile',[UserController::class,'index'])->name('user.profile');
});

//Rutas del carrito de compras
Route::prefix('/cartshop')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart');
    Route::post('/addToCart/{id}', [CartController::class, 'addItemsToCart'])->name('cart.addItem');
    Route::get('/deleteCart', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::get('/removeitem/{rowId}', [CartController::class, 'remove'])->name('cart.remove');
    Route::any('/update/{rowId}', [CartController::class, 'update'])->name('cart.update');
});

//Rutas del checkout y los metodos de pago
Route::prefix('checkout')->group(function () {
    Route::get('/', [PaymentController::class, 'index'])->name('checkout.index');
    Route::post('/directChargeOpenpay', [PaymentController::class, 'directChargeOpenPay'])->name('checkout.chargeOpenpay');
    Route::get('/directChargeOpenpay/responsepayment/',[PaymentController::class,'validateChargeOpenPay']);
    Route::post('/directChargeConekta', [PaymentController::class, 'directChargeConekta'])->name('checkout.chargeConekta');
    Route::post('/directChargeMercadoPago', [PaymentController::class, 'directChargeMercadoPago'])->name('checkout.chargeMercadoPago');
});

Route::get('/create/webhook', function () {
    $openpay = Openpay::getInstance(config('openpay.merchant_id'), config('openpay.private_key'), config('openpay.country_code'));
    $webhook = array(
        'url' => 'https://ecommerce.testvandu.com/openpay/webhook',
        'user' => 'juanito',
        'password' => 'passjuanito',
        'event_types' => array(
          'charge.refunded',
          'charge.failed',
          'charge.cancelled',
          'charge.created',
          'chargeback.accepted'
        )
        );
    $webhook = $openpay->webhooks->add($webhook);

    return $webhook;
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('/');
})->name('dashboard');
