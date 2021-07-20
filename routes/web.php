<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\LoginSocialiteController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebhooksController;
use App\Mail\OrderFailed;
use App\Mail\OrderShipped;
use App\Models\Order;
use App\Models\ShippingAddress;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
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
    Route::get('/', [CartController::class, 'index'])->middleware('auth')->name('cart');
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
    Route::post('/setAddress', [PaymentController::class, 'setAddress'])->name('checkout.setAddress');

    Route::get('orders/{order}', [PaymentController::class, 'show'])->name('orders.show');
});

// Rutas del blog
Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/post/{post}', [BlogController::class, 'show'])->name('blog.show');
});

Route::get('galery', [GaleryController::class, 'index'])->name('galery.index');

// Ruta política de privacidad & condiciones de uso
Route::get('/politicas-de-privacidad', function () {
    return view('politicas.index');
})->name('politicas-de-privacidad');
Route::get('/condiciones-de-uso', function () {
    return view('politicas.condiciones');
})->name('condiciones-de-uso');


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

Route::get('/mailable', function () {
    $order = Order::find(405);

    return new OrderFailed($order);
});



Route::get('pay', function (Request $request) {
/*     $payment_id = $request->get('payment_id');
    $response = Http::get("https://api.mercadopago.com/v1/payments/$payment_id" . "?access_token=APP_USR-3891420111706382-072002-9f710511839dad9a6fb2cfec2063c5d3-794005891");
    $response = json_decode($response);
    $status =  $response->status;
    if ($status == 'approved') {
        //Creamos la direccion que se le asignara a la orden de compra
        $shipping_address = ShippingAddress::create([
            'street' => $request->session()->get('street'),
            'number' => $request->session()->get('number'),
            'crosses' => $request->session()->get('crosses'),
            'suburb' => $request->session()->get('suburb'),
            'reference' => $request->session()->get('reference'),
            'state' => $request->session()->get('state'),
            'city' => $request->session()->get('city'),
            'postal_code' => $request->session()->get('postal_code'),
        ]);
        //Creamos la orden en la base de datos con un estado de process que indicara que no esta aun terminada la transaccion
        $order = Order::create([
            'amount' => (float)str_replace(',', '', Cart::total()), //aqui el metodo total() de Cart regresa un string con una coma, lo que hacemos es quitarcela
            'id_gateway' => null,
            'status' => 'charge.succeeded',
            'type' => 'card',
            'user_id' => auth()->user()->id,
            'shipping_address_id' => $shipping_address->id,
        ]);

        //Creamos los registros de la orden en la tabla order_producto obteniendo el contenido del carrito
        foreach (Cart::content() as $product) {
            DB::table('order_product')->insert([
                [
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quanty' => $product->qty,
                    'price' => $product->price,
                    'color' => $product->options->color,
                    'size' => $product->options->size,
                ]
            ]);
        }
        Mail::to($order->user->email)->send(new OrderShipped($order));
        Cart::destroy();
    } */

    return redirect()->route('user.profile');
})->name('pay');

Route::post('webhooks', WebhooksController::class);
