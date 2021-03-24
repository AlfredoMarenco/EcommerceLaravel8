<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = json_decode(file_get_contents('php://input'), true);
        Log::info($response);
        $type = $response['type'];
        $id_gateway = $response['transaction']['id'];

        if ($type == 'verification') {
            Log::info('capturamos el valor del tipo de transaccion');
        }

        switch ($type) {
            case 'charge.refunded':
                $order = Order::where('id_gateway', $id_gateway)->get();
                Log::info($order);
                Log::info($id_gateway);
                dd($order);
                $order->status = 'charge.refunded';
                $order->update([
                    'status' => 'charge.refunded'
                ]);
                Log::info($response['transaction']['id']);
                Log::info('Hemos reembolsado la orden con id_gateway = ' . $response['transaction']['id'] . ' con exito');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
