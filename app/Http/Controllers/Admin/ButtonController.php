<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ButtonRequest;
use App\Models\Button;
use App\Models\Category;
use Illuminate\Http\Request;

class ButtonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.frontend.buttons.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.frontend.buttons.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ButtonRequest $request)
    {
        $button = Button::create($request->all());
        return redirect()->route('admin.buttons.edit', $button)->with('success', 'Boton agregada de forma exitosa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Button $button)
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.frontend.buttons.edit',compact('button', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ButtonRequest $request, Button $button)
    {
        $button->update($request->all());

        return redirect()->route('admin.buttons.edit', $button)->withToastSuccess('Boton actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Button $button)
    {
        $button->delete();

        return redirect()->route('admin.buttons.index')->withSuccess('Boton eliminado con éxito');
    }
}
