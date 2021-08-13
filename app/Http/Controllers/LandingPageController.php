<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Button;
use App\Models\Catalogue;
use App\Models\Category;
use App\Models\Cuponf;
use App\Models\Mosaic;
use App\Models\Post;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Video;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $categories = Category::pluck('name', 'id');
        $posts = Post::where('status', 'like', '3')->latest('id')->paginate(3);
        $catalogues = Catalogue::latest('id')->paginate(3);
        $sliders = Slider::all();
        $buttons = Button::all();
        $cuponfs = Cuponf::all();
        $brands = Brand::all();
        $mosaics = Mosaic::all();
        return view('bajce.index', compact('categories', 'posts', 'catalogues', 'sliders', 'buttons', 'cuponfs', 'brands', 'mosaics'));
    }

    public function search(Request $request)
    {
        $category_id = $request->category_id;
        $categories = Category::all();
        $brands = Brand::all();
        if ($category_id == 0) {
            $products = Product::where('name', 'like', '%' . $request->search . '%')->latest('id')->paginate(10);
            return view('bajce.shop.search', compact('products', 'categories', 'brands'));
        } else {
            $products = Product::whereHas('categories', function (Builder $query) use ($category_id) {
                $query->where('category_id', $category_id);
            })->where('name', 'like', '%' . $request->search . '%')->latest('id')->paginate(10);
            return view('bajce.shop.search', compact('products', 'categories', 'brands'));
        }
    }

    public function about()
    {
        $brands = Brand::all();
        $videos = Video::all();
        return view('bajce.about-us', compact('brands', 'videos'));
    }
}
