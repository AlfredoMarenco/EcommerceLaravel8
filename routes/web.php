<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginSocialiteController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Mail\OrderFailed;
use App\Mail\OrderShipped;
use App\Models\Order;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;



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

/* Route::get('/', [ShopController::class, 'index'])->name('shop.home');
Route::get('/product/{product}', [ShopController::class, 'showProduct'])->name('shop.product');
Route::get('/products/{var?}', [ShopController::class, 'showProducts'])->name('shop.products');



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
    Route::get('/directChargeOpenpay/responsepayment/', [PaymentController::class, 'validateChargeOpenPay']);
    Route::get('/storeReference', [PaymentController::class, 'storeReference'])->name('checkout.storeReference');
    Route::post('/storeReferenceOpenpay', [PaymentController::class, 'storeReferenceOpenPay'])->name('checkout.storeOpenpay');
    Route::post('/directChargeConekta', [PaymentController::class, 'directChargeConekta'])->name('checkout.chargeConekta');
    Route::post('/directChargeMercadoPago', [PaymentController::class, 'directChargeMercadoPago'])->name('checkout.chargeMercadoPago');
});



Route::get('galery', [GaleryController::class,'index'])->name('galery.index');

// Ruta política de privacidad & condiciones de uso
Route::get('/politicas-de-privacidad', function(){
    return view('politicas.index');
    })->name('politicas-de-privacidad');

Route::get('/condiciones-de-uso', function(){
    return view('politicas.condiciones');
    })->name('condiciones-de-uso');

*/


Route::get('/mailable/{order}', function ($order) {
    $order = Order::find($order);

    return new OrderShipped($order);
});


// Index
Route::get('/', [LandingPageController::class, 'index'])->name('index');
Route::get('/nosotros', [LandingPageController::class, 'about'])->name('about');
Route::post('/search', [LandingPageController::class, 'search'])->name('search');


//Rutas Tienda
Route::prefix('/tienda')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('shop.index');
    Route::get('/producto/{product}', [ShopController::class, 'showProduct'])->name('shop.product');
    Route::get('/productos/{category?}', [ShopController::class, 'showProductsCategory'])->name('shop.products.category');
    Route::post('/productos/filter', [ShopController::class, 'filterProduct'])->name('shop.products.filter');
});

//Rutas Catalogo
Route::prefix('/catalogos')->group(function () {
    Route::get('/', [CatalogueController::class, 'index'])->name('catalogue.index');
    Route::get('/productos/{category?}', [CatalogueController::class, 'products'])->name('catalogue.products');
    Route::get('/producto/{product}', [CatalogueController::class, 'product'])->name('catalogue.product');
    Route::post('/productos/filter', [CatalogueController::class, 'filterProduct'])->name('catalogue.products.filter');
});

// Rutas del blog
Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/post/{post}', [BlogController::class, 'show'])->name('blog.show');
    Route::post('/storeComment', [BlogController::class, 'storeComment'])->name('blog.store.comment');
});


//Rutas del carrito de compras
Route::prefix('/carrito')->group(function () {
    Route::get('/', [ShopController::class, 'cart'])->name('cart');
    Route::post('/addToCart/{id}', [ShopController::class, 'addItemToCart'])->name('cart.addItem');
    Route::post('/addsToCart/{id}', [ShopController::class, 'addItemsToCart'])->name('cart.addItems');
    Route::post('/addToCartCheckout/{id}', [ShopController::class, 'addItemToCartCheckout'])->name('cart.addItemToCheckout');
    Route::any('/update/{rowId}', [ShopController::class, 'update'])->name('cart.update');
    Route::get('/deleteCart', [ShopController::class, 'destroy'])->name('cart.destroy');
    Route::get('/removeitem/{rowId}', [ShopController::class, 'removeItemToCart'])->name('cart.remove');
    Route::post('/applyCoupon', [ShopController::class, 'applyCoupon'])->name('cart.applyCoupon');
    Route::get('/applyCoupon', [ShopController::class, 'deleteCoupon'])->name('cart.deleteCoupon');
});

//Rutas wishlist
Route::prefix('/wishlist')->group(function () {
    Route::post('/addToWishlist/{id}', [ShopController::class, 'addItemToWishlist'])->name('wishlist.addItem');
    Route::post('/addsToWishlist/{id}', [ShopController::class, 'addItemsToWishlist'])->name('wishlist.addItems');
    Route::any('/update/{rowId}', [ShopController::class, 'updateWishlist'])->name('wishlist.update');
    Route::get('/deleteCart', [ShopController::class, 'destroy'])->name('wishlist.destroy');
    Route::get('/removeitem/{rowId}', [ShopController::class, 'removeItemToWishlist'])->name('wishlist.remove');
});

//Rutas del checkout y los metodos de pago
Route::prefix('checkout')->group(function () {
    Route::get('/card', [PaymentController::class, 'index'])->name('checkout.index');
    Route::get('/cash', [PaymentController::class, 'cash'])->name('checkout.cash');
    Route::post('/directChargeOpenpay', [PaymentController::class, 'directChargeOpenPay'])->name('checkout.chargeOpenpay');
    Route::get('/directChargeOpenpay/responsepayment/', [PaymentController::class, 'validateChargeOpenPay']);
    Route::get('/storeReference', [PaymentController::class, 'storeReference'])->name('checkout.storeReference');
    Route::post('/storeReferenceOpenpay', [PaymentController::class, 'storeReferenceOpenPay'])->name('checkout.storeOpenpay');
    Route::post('/directChargeConekta', [PaymentController::class, 'directChargeConekta'])->name('checkout.chargeConekta');
    Route::post('/directChargeMercadoPago', [PaymentController::class, 'directChargeMercadoPago'])->name('checkout.chargeMercadoPago');
});

//Rutas de panel del cliente de
Route::prefix('/usuario')->group(function () {
    Route::get('/perfil', [UserController::class, 'index'])->name('user.profile');
    Route::get('/ordenes', [UserController::class, 'showOrders'])->name('user.orders');
    Route::get('/configuracion', [UserController::class, 'edit'])->name('user.settings');
    Route::post('/updatePassword', [UserController::class, 'updatePassword'])->name('user.update.password');
    Route::post('/updateInformationProfile', [UserController::class, 'updateInformationProfile'])->name('user.update.profile');
});

//Rutas de login con redes sociales
Route::get('login/auth/redirect/{drive}', [LoginSocialiteController::class, 'redirect'])->name('login.drive');
Route::get('login/auth/callback/{drive}', [LoginSocialiteController::class, 'callback']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('/');
})->name('dashboard');

/*Rutas para manejo de verificacion de
usuarios y de reestablecimiento de contraseñas*/
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) use ($request) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status == Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');
/*
// Artículo
Route::get('/articulo', function () {
    return view('bajce.blog.article');
});
// index producto

// producto detalle
Route::get('/producto', function () {
    return view('bajce.shop.product');
});
// index catálogo
route::get('/catalogo', function () {
    return view('bajce.catalog.index');
});
// productos del catálogo
route::get('/productos-catalogo', function () {
    return view('bajce.catalog.catalog');
});
// detalle del catálogo
route::get('/detalle-producto', function () {
    return view('bajce.catalog.product');
});
// Nosotros


// Mis órdenes
route::get('/mis-ordenes', function () {
    return view('bajce.user.my-orders');
});

// Mi dirección
route::get('/mi-direccion', function () {
    return view('bajce.user.my-adress');
});
*/

/* Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser'); */
