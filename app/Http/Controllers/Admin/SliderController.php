<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.frontend.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.frontend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = Slider::create($request->all());

        if ($request->file('file')) {
            $url = Storage::put('slider', $request->file('file'));
            $slider->image()->create([
                'url' => $url,
            ]);
        }
        return redirect()->route('admin.sliders.edit', $slider)->with('success', 'Slider agregado de forma exitosa');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.frontend.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $slider->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('slider', $request->file('file'));

            if ($slider->image) {
                Storage::delete($slider->image->url);

                $slider->image->update([
                    'url' => $url
                ]);
            } else {
                $slider->image()->create([
                    'url' => $url
                ]);
            }
        }
        return redirect()->route('admin.sliders.edit', $slider)->withToastSuccess('Slider actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
