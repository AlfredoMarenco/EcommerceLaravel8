<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function index()
    {
        $catalogues = Catalogue::all();
        return view('bajce.catalog.index', compact('catalogues'));
    }

    public function products()
    {
        $products = Product::where('type', 1)->latest('id')->paginate(5);
        return view('bajce.catalog.catalog', compact('products'));
    }

    public function product(Product $product)
    {
        return view('bajce.catalog.product', compact('product'));
    }
}
