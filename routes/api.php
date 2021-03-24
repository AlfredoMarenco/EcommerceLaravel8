<?php


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

Route::any('/mywebhook', function () {
    $response = json_decode(file_get_contents('php://input'),true);
    Log::info($response);
    $type = $response['type'];

    if ($type == 'verification') {
        Log::info('capturamos el valor del tipo de transaccion');
    }
/*     if($response['type'] == 'verification'){
        Log::info('Se hizo cargo de tipo reembolso!!!!!!');
    } */
    return response()->json(200);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
