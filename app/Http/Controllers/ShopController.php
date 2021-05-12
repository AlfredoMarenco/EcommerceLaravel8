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

    public function cart(){
        return view('bajce.shop.shopping-cart');
    }

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

    public function removeItemToCart($rowId)
    {
        Cart::remove($rowId);
        return back();
    }
}
