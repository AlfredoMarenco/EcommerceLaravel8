<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Configuration;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /*     public function __construct(){
        $this->middleware('verified');
    } */
    public function index()
    {
        return view('bajce.shop.index');
    }


    public function showProduct(Product $product)
    {
        return view('bajce.shop.product', compact('product'));
    }

    //Mostramos la vista del carrito
    public function cart()
    {
        $products = Product::inRandomOrder()->paginate(4);
        return view('bajce.shop.shopping-cart',compact('products'));
    }

    //Funcion para agregar un producto de 1 en 1
    public function addItemToCart($product)
    {
        $product = Product::find($product);
        if ($product->discount) {
            Cart::add([
                'id' => $product->id,
                'name' => $product->name,
                'qty' => 1,
                'price' => $product->discount,
                'weight' =>  0,
            ])->associate('App\Models\Product');
            toast('Agregado al carrito', 'success');
        } else {
            Cart::add([
                'id' => $product->id,
                'name' => $product->name,
                'qty' => 1,
                'price' => $product->price,
                'weight' =>  0,
            ])->associate('App\Models\Product');
            toast('Agregado al carrito', 'success');
        }
        return back();
    }

    //Funcion para agregar n cantidad de productos en una sola peticion
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
    //Funcion para actualizar el carrito
    public function update(Request $request, $rowId)
    {
        $qty = $request->qty;
        if ($qty > 0) {
            Cart::update($rowId, $qty);
            return back();
        }
        return back();
    }
    public function destroy()
    {
        Cart::destroy();
        return back();
    }

    public function removeItemToCart($rowId)
    {
        Cart::remove($rowId);
        return back();
    }
}
