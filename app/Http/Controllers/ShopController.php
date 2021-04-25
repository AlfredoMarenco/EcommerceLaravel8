<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Configuration;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
/*     public function __construct(){
        $this->middleware('verified');
    } */
    public function index()
    {
        $configurations = Configuration::all();
        return view('shop.index',compact('configurations'));
    }

    public function showProducts($var =  null)
    {
        switch ($var) {
            case null:
                return view('shop.products');
                break;

            case 'discounts':
                return view('shop.discount');
                break;
            case 'hombre':
                $products = Category::with('products')->where('name', 'Hombre')->latest('id')->paginate(15);
                return view('shop.men', compact('products'));
                break;
            case 'mujer':
                $products = Category::with('products')->where('name', 'Mujer')->latest('id')->paginate(15);
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
