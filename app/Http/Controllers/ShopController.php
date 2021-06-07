<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Configuration;
use App\Models\Coupon;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //Funcion para mostrar la tienda
    public function index()
    {
        $products = Product::where('type', 0)->paginate(12);
        $categories = Category::all();
        $brands = Brand::all();
        return view('bajce.shop.index', compact('products', 'categories', 'brands'));
    }

    //Mostramos un producto en especifico
    public function showProduct(Product $product)
    {
        $products = Product::inRandomOrder()->paginate(4);
        $reviews = $product->reviews()->latest()->paginate(3);
        return view('bajce.shop.product', compact('product', 'products', 'reviews'));
    }

    //Mostramos la vista de los productos filtrados por categorias nada mas
    public function showProductsCategory($category_id)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $products = Product::whereHas('categories', function (Builder $query) use ($category_id) {
            $query->where('category_id', $category_id);
        })->where('type', 0)->latest('id')->paginate(10);
        return view('bajce.shop.index', compact('products', 'categories', 'brands'));
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
        return redirect()->route('cart');
    }

    //Funcion para agregar n cantidad de productos en una sola peticion
    public function addItemsToCart(Request $request, $product)
    {
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
            Cart::setGlobalDiscount(0);
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

    //Funcion aplicacion de cupon de descuento
    public function applyCoupon(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon)->first();
        if ($coupon) {
            if ($coupon->type == 'fixed') {
                $total = str_replace(',', '', Cart::instance('default')->total());
                $code = ((float)$coupon->value * 100) / (float)$total;
                Cart::setGlobalDiscount($code);
            } else {
                Cart::setGlobalDiscount($coupon->percent_off);
            }
            return back()->withSuccess('Cupón aplicado con éxito!');
        } else {
            return back()->with('errors', 'Cupón no válido');
        }
    }

    public function deleteCoupon()
    {
        Cart::setGlobalDiscount(0);

        return back();
    }

    public function filterProduct(Request $request)
    {
        $categories = Category::all();
        $brands = Brand::all();

        if ($request->condition == 0) {
            if ($request->categories && !$request->brands) {
                $products = Product::whereHas('categories', function (Builder $query) use ($request) {
                    $query->where('category_id', $request->categories);
                })->whereBetween('price', [$request->price_min, $request->price_max])->where('type', 0)->latest('id')->paginate(12);
            }

            if ($request->categories && $request->brands) {
                $products = Product::whereHas('categories', function (Builder $query) use ($request) {
                    $query->where('category_id', $request->categories);
                })->whereBetween('price', [$request->price_min, $request->price_max])->whereIn('brand_id', $request->brands)->where('type', 0)->latest('id')->paginate(12);
            }

            if (!$request->categories && $request->brands) {
                $products = Product::whereBetween('price', [$request->price_min, $request->price_max])->whereIn('brand_id', $request->brands)->where('type', 0)->latest('id')->paginate(12);
            }

            if (!$request->categories && !$request->brands) {
                $products =  Product::whereBetween('price', [$request->price_min, $request->price_max])->where('type', 0)->paginate(12);
            }
        } else {
            if ($request->categories && !$request->brands) {
                $products = Product::whereHas('categories', function (Builder $query) use ($request) {
                    $query->where('category_id', $request->categories);
                })->whereBetween('discount', [$request->price_min, $request->price_max])->where('type', 0)->latest('id')->paginate(12);
            }

            if ($request->categories && $request->brands) {
                $products = Product::whereHas('categories', function (Builder $query) use ($request) {
                    $query->where('category_id', $request->categories);
                })->whereBetween('discount', [$request->price_min, $request->price_max])->whereIn('brand_id', $request->brands)->where('type', 0)->latest('id')->paginate(12);
            }

            if (!$request->categories && $request->brands) {
                $products = Product::whereBetween('discount', [$request->price_min, $request->price_max])->whereIn('brand_id', $request->brands)->where('type', 0)->latest('id')->paginate(12);
            }

            if (!$request->categories && !$request->brands) {
                $products =  Product::whereBetween('discount', [$request->price_min, $request->price_max])->where('type', 0)->paginate(12);
            }
        }

        return view('bajce.shop.index', compact('products', 'categories', 'brands'));
    }
}
