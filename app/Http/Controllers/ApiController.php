<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        return response()->json(200);
        $type = $response['type'];
        $id_gateway = $response['transaction']['id'];

        //Recuperamos la orden con el helper first para que podamos utilizar el metodo update ya que si usamos get estariamos recuperando una coleccion y necesitamos el objeto
        switch ($type) {
            case 'charge.refunded':
                $order = Order::where('id_gateway', $id_gateway)->first();
                $order->update([
                    'status' => 'charge.refunded'
                ]);
                break;
            case 'charge.succeeded':
                $order = Order::where('id_gateway', $id_gateway)->first();
                $order->update([
                    'status' => 'charge.succeeded'
                ]);
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
