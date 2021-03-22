<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;



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
Route::get('/products/{var?}', [ShopController::class, 'showProducts'])->name('shop.products');

Route::prefix('/user')->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('user.profile');
    Route::get('/orders', [UserController::class, 'showOrders'])->name('user.orders');
    Route::get('/settings', [UserController::class, 'edit'])->name('user.settings');
    Route::post('/updatePassword', [UserController::class, 'updatePassword'])->name('user.update.password');
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
    Route::get('/directChargeOpenpay/responsepayment/', [PaymentController::class, 'validateChargeOpenPay']);
    Route::post('/directChargeConekta', [PaymentController::class, 'directChargeConekta'])->name('checkout.chargeConekta');
    Route::post('/directChargeMercadoPago', [PaymentController::class, 'directChargeMercadoPago'])->name('checkout.chargeMercadoPago');
});

// Rutas del blog
Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/post/{post}', [BlogController::class, 'show'])->name('blog.show');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('/');
})->name('dashboard');


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


Route::get('login/auth/redirect/{drive}', function ($drive) {
    return Socialite::driver($drive)->redirect();
})->name('login.drive');

Route::get('login/auth/callback/{drive}', function ($drive) {
    $user = Socialite::driver($drive)->user();
    dd($user);
    /* return $user->token; */
});
