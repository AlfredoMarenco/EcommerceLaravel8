<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Configuration;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //Funcion para mostrar la tienda
    public function index()
    {
        return view('bajce.shop.index');
    }


    public function showProduct(Product $product)
    {
        $products = Product::inRandomOrder()->paginate(4);
        return view('bajce.shop.product', compact('product', 'products'));
    }

    //Mostrámos la vista del carrito
    public function cart()
    {
        $products = Product::inRandomOrder()->paginate(4);
        return view('bajce.shop.shopping-cart', compact('products'));
    }

    //Función para agregar un producto de 1 en 1
    public function addItemToCart($product)
    {
        $product = Product::find($product);
        if ($product->discount) {
            Cart::instance('default')->add([
                'id' => $product->id,
                'name' => $product->name,
                'qty' => 1,
                'price' => $product->discount,
                'weight' =>  0,
            ])->associate('App\Models\Product');
            toast('Agregado al carrito', 'success');
        } else {
            Cart::instance('default')->add([
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
            Cart::instance('default')->add([
                'id' => $product->id,
                'name' => $product->name,
                'qty' => $request->qty,
                'price' => $product->discount,
                'weight' =>  0,
                'options' => ['size' => $request->size, 'color' => $request->color],
            ])->associate('App\Models\Product');
            toast('Agregado al carrito', 'success');
        } else {
            Cart::instance('default')->add([
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
    //Funcion para agregar un productos a la wishlist
    public function addItemToWishlist($product)
    {
        $product = Product::find($product);
        if ($product->discount) {
            Cart::instance('wishlist')->add([
                'id' => $product->id,
                'name' => $product->name,
                'qty' => 1,
                'price' => $product->discount,
                'weight' =>  0,
            ])->associate('App\Models\Product');
            toast('Agregado al carrito', 'success');
        } else {
            Cart::instance('wishlist')->add([
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

    //Funcion para actualizar el carrito
    public function update(Request $request, $rowId)
    {
        $qty = $request->qty;
        if ($qty > 0) {
            Cart::instance('default')->update($rowId, $qty);
            return back();
        }
        return back();
    }

    //Funcion para actualizar el carrito
    public function updateWishlist(Request $request, $rowId)
    {
        $qty = $request->qty;
        if ($qty > 0) {
            Cart::instance('wishlist')->update($rowId, $qty);
            return back();
        }
        return back();
    }

    //Funcion para eliminar todos los productos del carrito
    public function destroy()
    {
        Cart::destroy();
        return back();
    }

    //Funcion para eliminar un producto del carrito
    public function removeItemToCart($rowId)
    {
        Cart::remove($rowId);
        return back();
    }

    //Funcion para eliminar un producto del carrito
    public function removeItemToWishlist($rowId)
    {
        Cart::instance('wishlist')->remove($rowId);
        return back();
    }
}
