<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
/*     public function __construct(){
        $this->middleware('verified');
    } */
    public function index()
    {
        $products = Product::where('stock', '>', 0)->latest('id')->get();
        return view('shop.index', compact('products'));
    }

    public function showProducts($var =  null)
    {
        switch ($var) {
            case null:
                $products = Product::where('stock', '>', 0)->inRandomOrder()->paginate(15);
                return view('shop.products', compact('products'));
                break;

            case 'discounts':
                $products = Product::where('stock', '>', 0)->where('discount', '>', 0)->latest('id')->paginate(15);
                return view('shop.products', compact('products'));
                break;
            case 'hombre':
                $products = Category::with('products')->where('name', 'Hombre')->get();
                return view('shop.men', compact('products'));
                break;
            case 'mujer':
                $products = Category::with('products')->where('name', 'Mujer')->get();
        return view('shop.women', compact('products'));
                break;

            default:
                # code...
                break;
        }
    }

    public function showProduct(Product $product)
    {
        return view('shop.product', compact('product'));
    }
}
