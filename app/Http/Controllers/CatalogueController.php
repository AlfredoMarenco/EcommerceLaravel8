<?php

namespace App\Http\Controllers;

use App\Models\Brand;
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
        $categories = Category::all();
        $brands = Brand::all();
        /* $products = Product::where('type', 1)->latest('id')->paginate(5); */
        $products = Product::whereHas('categories', function (Builder $query) use ($category_id) {
            $query->where('category_id', $category_id);
        })->where('type', 1)->latest('id')->paginate(10);
        $catalogue = Catalogue::where('category_id', $category_id)->first();
        $catalogues = Catalogue::latest('id')->paginate(3);
        return view('bajce.catalog.catalog', compact('products', 'catalogues', 'categories', 'brands', 'catalogue'));
    }

    public function product(Product $product, $catalogue_id)
    {
        $category_id = $product->categories->pluck('id');
        $products = Product::whereHas('categories', function (Builder $query) use ($category_id) {
            $query->whereIn('category_id', $category_id);
        })->where('type', 1)->inRandomOrder()->paginate(3);
        $catalogue = Catalogue::find($catalogue_id);
        return view('bajce.catalog.product', compact('product', 'products', 'catalogue'));
    }


    public function filterProduct(Request $request)
    {
        $categories = Category::all();
        $brands = Brand::all();
        if ($request->condition == 0) {
            if ($request->categories && !$request->brands) {
                $products = Product::whereHas('categories', function (Builder $query) use ($request) {
                    $query->whereIn('category_id', $request->categories);
                })->whereBetween('price', [$request->price_min, $request->price_max])->where('type', 1)->latest('id')->paginate(12);
            }

            if ($request->categories && $request->brands) {
                $products = Product::whereHas('categories', function (Builder $query) use ($request) {
                    $query->whereIn('category_id', $request->categories);
                })->whereBetween('price', [$request->price_min, $request->price_max])->whereIn('brand_id', $request->brands)->where('type', 1)->latest('id')->paginate(12);
            }

            if (!$request->categories && $request->brands) {
                $products = Product::whereBetween('price', [$request->price_min, $request->price_max])->whereIn('brand_id', $request->brands)->where('type', 1)->latest('id')->paginate(12);
            }

            if (!$request->categories && !$request->brands) {
                $products =  Product::whereBetween('price', [$request->price_min, $request->price_max])->where('type', 1)->paginate(12);
            }
        } else {
            if ($request->categories && !$request->brands) {
                $products = Product::whereHas('categories', function (Builder $query) use ($request) {
                    $query->whereIn('category_id', $request->categories);
                })->whereBetween('discount', [$request->price_min, $request->price_max])->where('type', 1)->latest('id')->paginate(12);
            }

            if ($request->categories && $request->brands) {
                $products = Product::whereHas('categories', function (Builder $query) use ($request) {
                    $query->whereIn('category_id', $request->categories);
                })->whereBetween('discount', [$request->price_min, $request->price_max])->whereIn('brand_id', $request->brands)->where('type', 1)->latest('id')->paginate(12);
            }

            if (!$request->categories && $request->brands) {
                $products = Product::whereBetween('discount', [$request->price_min, $request->price_max])->whereIn('brand_id', $request->brands)->where('type', 1)->latest('id')->paginate(12);
            }

            if (!$request->categories && !$request->brands) {
                $products =  Product::whereBetween('discount', [$request->price_min, $request->price_max])->where('type', 1)->paginate(12);
            }
        }
        $catalogue = Catalogue::where('category_id', $request->categories)->first();
        dd($catalogue);
        return view('bajce.catalog.catalog', compact('products', 'categories', 'brands', 'catalogue'));
    }
}
