<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
        return view('shop.cart');
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
        return back();
    }

    public function remove($rowId)
    {

        Cart::remove($rowId);

        return back();
    }
}
