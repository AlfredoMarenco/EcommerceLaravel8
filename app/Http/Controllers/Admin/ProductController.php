<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Detail;
use App\Models\Image;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.products.index')->only('index');
        $this->middleware('can:admin.products.create')->only('create', 'store');
        $this->middleware('can:admin.products.edit')->only('edit', 'update');
        $this->middleware('can:admin.products.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Cache::has('products')) {
            $products = Cache::get('products');
        } else {
            $products = Product::paginate(15);
            Cache::put('products', $products);
        }
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $brands = Brand::pluck('name', 'id');
        return view('admin.products.create', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->all());

        if ($request->file('file')) {
            $files = $request->file('file');
            foreach ($files as $file) {
                $url = Storage::put('productos', $file);
                $product->image()->create([
                    'url' => $url,
                ]);
            }
        }

        if ($request->categories) {
            $product->categories()->attach($request->category_id);
        }
        return redirect()->route('admin.products.edit', $product)->withSuccess('Producto creado con éxito!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::pluck('name', 'id');
        $brands = Brand::pluck('name', 'id');
        return view('admin.products.edit', compact('product', 'categories', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {

        $product->update($request->all());

        if ($request->file('file')) {
            $files = $request->file('file');
            foreach ($files as $file) {
                $url = Storage::put('productos', $file);
                $product->image()->create([
                    'url' => $url,
                ]);
            }
        }
        if ($request->categories) {
            $product->categories()->sync($request->categories);
        }
        return redirect()->route('admin.products.edit', $product)->withToastSuccess('Producto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            $product->delete();
            return redirect()->route('admin.products.index')->with('Success', 'Producto eliminado con éxito');
        } catch (\Throwable $th) {
            return back()->withToastError('Este producto ya tiene ventas');
        }
    }

    public function deleteImage($id)
    {
        $resource = Image::find($id);
        $resource->delete();
        return back();
    }
}
