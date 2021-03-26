<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index()
    {
        $collections = Collection::all();
        return view('galeria.index', compact('collections'));
    }
}
