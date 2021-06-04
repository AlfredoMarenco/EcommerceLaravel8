<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function index()
    {
        $catalogues = Catalogue::all();
        return view('bajce.catalog.index', compact('catalogues'));
    }

    public function products($category_id)
    {
        /* $products = Product::where('type', 1)->latest('id')->paginate(5); */
        $products = Product::whereHas('categories', function (Builder $query) use ($category_id) {
            $query->where('category_id', $category_id);
        })->where('type', 1)->latest('id')->paginate(10);
        return view('bajce.catalog.catalog', compact('products'));
    }

    public function product(Product $product)
    {
        return view('bajce.catalog.product', compact('product'));
    }
}
