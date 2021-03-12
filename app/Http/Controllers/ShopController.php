<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::where('stock', '>', 0)->latest('id')->get();
        return view('shop.index', compact('products'));
    }

    public function showProducts($category_id = null)
    {
        if ($category_id == null) {
            $products = Product::where('stock','>',0)->latest('id')->paginate(15);
            return view('shop.products', compact('products'));
        } else {
            $products = Category::where('name',$category_id);
            dd($products);
            return view('shop.products', compact('products'));
        }
    }

    public function showProduct(Product $product)
    {
        return view('shop.product',compact('product'));
    }
}
