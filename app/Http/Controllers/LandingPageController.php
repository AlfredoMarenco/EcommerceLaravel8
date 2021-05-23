<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $categories = Category::pluck('name','id');
        $posts = Post::latest('id')->paginate(3);
        $catalogues = Catalogue::latest('id')->paginate(3);
        return view('bajce.index',compact('categories','posts','catalogues'));
    }
}
