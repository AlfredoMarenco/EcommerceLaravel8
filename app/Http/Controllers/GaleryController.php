<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Configuration;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index()
    {
        $collections = Collection::all();
        $configurations = Configuration::all();
        return view('galeria.index', compact('collections','configurations'));
    }
}
