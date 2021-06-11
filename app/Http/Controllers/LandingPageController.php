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


    public function about()
    {
        $brands = Brand::all();
        $videos = Video::all();
        return view('bajce.about-us', compact('brands','videos'));
    }
}
