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
        $categories = Category::pluck('name', 'id');
        $products = Product::where('type', 0)->paginate(10);
        return view('bajce.shop.index', compact('products','categories'));
    }


    public function showProduct(Product $product)
    {
        return view('bajce.shop.product', compact('product'));
    }
}
