<?php

use App\Http\Controllers\ApiController;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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


Route::apiResource('/mywebhook',ApiController::class)->names('api.webhook');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
