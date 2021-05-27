<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mosaic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MosaicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.frontend.mosaic.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.frontend.mosaic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mosaic = Mosaic::create($request->all());

        if ($request->file('file')) {
            $url = Storage::put('mosaic', $request->file('file'));
            $mosaic->image()->create([
                'url' => $url,
            ]);
        }
        return redirect()->route('admin.mosaics.edit', $mosaic)->with('success', 'Cuadricula agregada de forma exitosa');
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
    public function edit(Mosaic $mosaic)
    {
        return view('admin.frontend.mosaic.edit', compact('mosaic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mosaic $mosaic)
    {
        $mosaic->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('mosaic', $request->file('file'));

            if ($mosaic->image) {
                Storage::delete($mosaic->image->url);

                $mosaic->image->update([
                    'url' => $url
                ]);
            } else {
                $mosaic->image()->create([
                    'url' => $url
                ]);
            }
        }
        return redirect()->route('admin.mosaics.edit', $mosaic)->withToastSuccess('Cuadricula actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mosaic $mosaic)
    {
        $mosaic->delete();

        return redirect()->route('admin.mosaics.index')->withSuccess('Cuadricula eliminada con éxito');
    }
}
