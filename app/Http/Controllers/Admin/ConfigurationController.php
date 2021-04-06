<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configurations  = Configuration::all();
        return view('admin.landing.index', compact('configurations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Configuration $configuration)
    {
        return view('admin.landing.edit', compact('configuration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Configuration $configuration)
    {
        switch ($configuration->resources) {
            case 'image':
                $files = $request->file('file');
                foreach ($files as $file) {
                    if ($file) {
                        $url = Storage::put('configurations', $file);

                        if ($configuration->image) {
                            Storage::delete($configuration->image->url);

                            $configuration->image->update([
                                'url' => $url
                            ]);
                        } else {
                            $configuration->image()->create([
                                'url' => $url
                            ]);
                        }
                    }
                }
                break;
            case 'video':
                $files = $request->file('file');
                foreach ($files as $file) {
                    if ($file) {
                        $url = Storage::put('configurations', $file);

                        if ($configuration->image) {
                            Storage::delete($configuration->image->url);

                            $configuration->image->update([
                                'url' => $url
                            ]);
                        } else {
                            $configuration->image()->create([
                                'url' => $url
                            ]);
                        }
                    }
                }
                break;
            case 'images':
                $files = $request->file('file');
                foreach ($files as $file) {
                    if ($file) {
                        $url = Storage::put('configurations', $file);
                        $configuration->image()->create([
                            'url' => $url
                        ]);
                    }
                }
                break;
        }
        return redirect()->route('admin.configurations.edit', $configuration);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }


    public function deleteSlide($id){
        $resource = Image::find($id);
        /* dd($resource); */
        $resource->delete();

        return back();
    }
}
