<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Openpay;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.orders.index')->only('index');
        $this->middleware('can:admin.orders.edit')->only('edit', 'update');
        $this->middleware('can:admin.orders.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.orders.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $openpay = Openpay::getInstance(config('openpay.merchant_id'), config('openpay.private_key'), config('openpay.country_code'));
        $charge = $openpay->charges->get($order->id_gateway);

        switch ($order->type) {
            case 'card':
                $card = $charge->card->serializableData;
                return view('admin.orders.show', compact('order', 'card'));
                break;
            case 'store':
                $card=null;
                return view('admin.orders.show', compact('order', 'card'));
                break;
            default:
                # code...
                break;
        }
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
    public function destroy($id_gateway)
    {
        $openpay = Openpay::getInstance(config('openpay.merchant_id'), config('openpay.private_key'), config('openpay.country_code'));

        $refundData = array('description' => 'Reembolso');
        $charge = $openpay->charges->get($id_gateway);
        $response = $charge->refund($refundData);
        $response = $response->refund;
        /* dd($response); */

        return redirect()->route('admin.orders.index')->withSuccess('La orden ha sido cancelada y reembolsada');
    }
}
