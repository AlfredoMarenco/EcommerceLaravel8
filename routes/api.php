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

Route::any('/webhook', function () {
    $content    =   file_get_contents("php://input");
    $respuesta  =   json_decode($content);

    return $respuesta;
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
