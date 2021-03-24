<?php

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

Route::any('/mywebhook', function () {
    $response = json_decode(file_get_contents('php://input'), true);
    /* Log::info($response); */
    $type = $response['type'];
    $id_gateway = $response['transaction']['id'];

    if ($type == 'verification') {
        Log::info('capturamos el valor del tipo de transaccion');
    }

    switch ($type) {
        case 'charge.refunded':
            $order = Order::where('id_gateway', 'like', '%'.$id_gateway.'%')->first();
            Log::info($order);
            Log::info($id_gateway);
            /* $order->status = 'charge.refunded';
            $order->update();
            Log::info($response['transaction']['id']);
            Log::info('Hemos reembolsado la orden con id_gateway = ' . $response['transaction']['id'] . ' con exito'); */
            break;

        default:
            # code...
            break;
    }
    return response()->json(200);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
