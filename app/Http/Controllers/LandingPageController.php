<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $products = Product::where('stock','>',0)->get();
        return view('landing.index',compact('products'));
    }

    public function showProduct($id)
    {
        $product = Product::find($id);
        return view('landing.products', compact('product'));
    }
}
