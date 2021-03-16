<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use MercadoPago\Item;
use MercadoPago\Payer;
use MercadoPago\Preference;
use MercadoPago\SDK;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SDK::setAccessToken(config('mercadopago.access_token'));
        $preference = new Preference();

        /* # Create an item object
        $item = new Item();
        $item->id = '20';
        $item->title = 'hola';
        $item->quantity = 1;
        $item->currency_id = 'MXN';
        $item->unit_price = 20;
        # Create a payer object
        $payer = new Payer();
        $payer->email = 'email@email.com';
        # Setting preference properties
        $preference->items = array($item);
        $preference->payer = $payer;
        # Save External Reference
        $preference->external_reference = '20';
        $preference->back_urls = [
            "success" => route('shop.home'),
            "pending" => route('shop.home'),
            "failure" => route('shop.home'),
        ];

        $preference->auto_return = "all";
        $preference->notification_url = route('shop.home');
        # Save and POST preference
        //dd($preference);
        $preference->save(); */

        // Crea un objeto de preferencia
        $preference = new Preference();

        // Crea un ítem en la preferencia
        $item = new Item();
        $item->title = 'Mi producto';
        $item->quantity = 1;
        $item->unit_price = 75.56;
        # Create a payer object
        $payer = new Payer();
        $payer->email = 'email@email.com';
        $preference->items = array($item);
        $preference->payer = $payer;
        $preference->save();
        return view('shop.cart', compact('preference'));
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
    public function update(Request $request, $rowId)
    {
        $qty = $request->qty;
        if ($qty > 0) {
            Cart::update($rowId, $qty);
            return back();
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        Cart::destroy();
        return back();
    }


    public function addItemsToCart(Request $request, $product)
    {
        //return $request->all();
        $product = Product::find($product);

        if ($product->discount) {
            Cart::add([
                'id' => $product->id,
                'name' => $product->name,
                'qty' => $request->qty,
                'price' => $product->discount,
                'weight' =>  0,
                'options' => ['size' => $request->size, 'color' => $request->color],
            ])->associate('App\Models\Product');
            toast('Agregado al carrito', 'success');
        } else {
            Cart::add([
                'id' => $product->id,
                'name' => $product->name,
                'qty' => $request->qty,
                'price' => $product->price,
                'weight' =>  0,
                'options' => ['size' => $request->size, 'color' => $request->color],
            ])->associate('App\Models\Product');
            toast('Agregado al carrito', 'success');
        }


        //Alert::success('Success Title', 'Articulo agregado al carrito');
        return back();
    }

    public function remove($rowId)
    {
        Cart::remove($rowId);

        return back();
    }
}
