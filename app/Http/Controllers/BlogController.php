<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $carbon = new Carbon();
        $posts = Post::where('status', 'like', '3')->paginate(5);
        $recents = Post::inRandomOrder()->paginate(4);
        return view('bajce.blog.index', compact('posts', 'recents', 'carbon'));
    }

    public function show(Post $post)
    {
        $carbon =  new Carbon();
        if ($post->status != 3) {
            $posts = Post::where('status', 'like', '3')->paginate(5);
            $recents = Post::inRandomOrder()->paginate(4);
            return redirect()->route('bajce.blog.index');
        }
        $recents = Post::inRandomOrder()->paginate(5);
        return view('bajce.blog.article', compact('post', 'recents', 'carbon'));
    }
}
