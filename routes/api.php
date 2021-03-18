<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::any('/mywebhook', function () {
    return response()->json(200);
});

Route::any('/create/webhook', function () {
    $openpay = Openpay::getInstance(config('openpay.merchant_id'), config('openpay.private_key'), config('openpay.country_code'));
    $webhook = array(
        'url' => 'https://ecommerce.testvandu.com/api/mywebhook/',
        'user' => 'marenco',
        'password' => 'marencos6359:D',
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
