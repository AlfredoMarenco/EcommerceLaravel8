<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $products = Product::where('stock','>',0)->latest('id')->get();
        return view('shop.index',compact('products'));
    }

    public function showProduct($id = null)
    {
        $product = Product::find($id);
        return view('shop.products', compact('product'));
    }
}
