<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CatalogueRequest;
use App\Models\Catalogue;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.catalogues.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.catalogues.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatalogueRequest $request)
    {
        $catalogue = Catalogue::create($request->all());

        if ($request->file('file')) {
            $url = Storage::put('catalogos', $request->file('file'));
            $catalogue->image()->create([
                'url' => $url,
            ]);
        }

        return redirect()->route('admin.catalogues.edit', $catalogue)->with('success', 'Catalogo agregada de forma exitosa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Catalogue $catalogue)
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.catalogues.edit', compact('catalogue', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalogue $catalogue)
    {
        $catalogue->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('catalogue', $request->file('file'));

            if ($catalogue->image) {
                Storage::delete($catalogue->image->url);

                $catalogue->image->update([
                    'url' => $url
                ]);
            } else {
                $catalogue->image()->create([
                    'url' => $url
                ]);
            }
        }
        return redirect()->route('admin.catalogues.edit', $catalogue)->withToastSuccess('Catalogo actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catalogue $catalogue)
    {
        $catalogue->delete();

        return redirect()->route('admin.catalogues.index')->withSuccess('Catalogo eliminado con éxito');
    }
}
