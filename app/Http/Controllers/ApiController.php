<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $response = json_decode(file_get_contents('php://input'), true);
        Log::info($response);
        /*return response()->json(200); */
        $type = $response['type'];
        $id_gateway = $response['transaction']['id'];

        //Recuperamos la orden con el helper first para que podamos utilizar el metodo update ya que si usamos get estariamos recuperando una coleccion y necesitamos el objeto
        switch ($type) {
            case 'charge.refunded': //Estado para reembolsos
                $order = Order::where('id_gateway', $id_gateway)->first();
                if ($order) {
                    $order->update([
                        'status' => 'charge.refunded'
                    ]);
                }
                break;
            case 'charge.succeeded': //Estados para cargos exitosos
                $order = Order::where('id_gateway', $id_gateway)->first();
                if ($order) {
                    $order->update([
                        'status' => 'charge.succeeded'
                    ]);
                    Mail::to(auth()->user())->send(new OrderShipped($order));
                }
                break;
            case 'charge.failed': //Estado para cargos fallidos
                $order = Order::where('id_gateway', $id_gateway)->first();
                if ($order) {
                    $order->update([
                        'status' => 'charge.failed'
                    ]);
                }
                break;
            case 'charge.created': //Estado para referencias de pago paynet
                $order = Order::where('id_gateway', $id_gateway)->first();
                if ($order) {
                    $order->update([
                        'status' => 'charge.created'
                    ]);
                }
                break;
            case 'charge.cancelled': //Estado para referencias de pagos expiradas
                $order = Order::where('id_gateway', $id_gateway)->first();
                if ($order) {
                    $order->update([
                        'status' => 'charge.cancelled'
                    ]);
                }
                break;
            case 'charge.expired': //Estado cargos con tarjeta pendientes expiradas
                $order = Order::where('id_gateway', $id_gateway)->first();
                if ($order) {
                    $order->update([
                        'status' => 'charge.expired'
                    ]);
                }
                break;

            default:
                # code...
                break;
        }
        return response()->json(200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
