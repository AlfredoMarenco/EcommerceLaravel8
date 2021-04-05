<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.collections.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.collections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('image1')) {
            $image1 = Storage::put('collections', $request->file('image1'));
        }
        if ($request->file('image2')) {
            $image2 = Storage::put('collections', $request->file('image2'));
        }
        if ($request->file('image3')) {
            $image3 = Storage::put('collections', $request->file('image3'));
        }

        $collection = Collection::create([
            'name' => $request->name,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
        ]);

        return redirect()->route('admin.collections.edit', $collection);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Collection $collection)
    {

        return view('admin.collections.edit', compact('collection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collection $collection)
    {
        try {
            if ($request->file('image1') || $request->file('image2') || $request->file('image3')) {
                $image1 = Storage::put('collections', $request->file('image1'));
                $image2 = Storage::put('collections', $request->file('image2'));
                $image3 = Storage::put('collections', $request->file('image3'));

                $collection->update([
                    'name' => $request->name,
                    'image1' => $image1,
                    'image2' => $image2,
                    'image3' => $image3,
                ]);
            }
            return redirect()->route('admin.collections.edit', $collection);
        } catch (\Throwable $th) {
            return redirect()->route('admin.collections.edit', $collection)->withToastError('Algo a salido mal');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collection $collection)
    {
        $collection->delete();
        return redirect()->route('admin.collections.index');
    }
}
