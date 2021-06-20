<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CuponFRequest;
use App\Models\Cuponf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CuponFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.frontend.cupon.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.frontend.cupon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CuponFRequest $request)
    {
        $cuponfs = Cuponf::create($request->all());

        if ($request->file('file')) {
            $url = Storage::put('cuponf', $request->file('file'));
            $cuponfs->image()->create([
                'url' => $url,
            ]);
        }
        return redirect()->route('admin.cuponfs.edit', $cuponfs)->with('success', 'Cupon agregado de forma exitosa');
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
    public function edit(Cuponf $cuponf)
    {
        return view('admin.frontend.cupon.edit', compact('cuponf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CuponFRequest $request, Cuponf $cuponf)
    {
        $cuponf->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('cuponf', $request->file('file'));

            if ($cuponf->image) {
                Storage::delete($cuponf->image->url);

                $cuponf->image->update([
                    'url' => $url
                ]);
            } else {
                $cuponf->image()->create([
                    'url' => $url
                ]);
            }
        }
        return redirect()->route('admin.cuponfs.edit', $cuponf)->withToastSuccess('Cupon actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CuponF $cuponf)
    {
        $cuponf->delete();

        return redirect()->route('admin.cuponfs.index')->withSuccess('Cupon eliminado con éxito');
    }
}
