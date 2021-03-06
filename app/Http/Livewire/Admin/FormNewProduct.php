<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormNewProduct extends Component
{
    use WithFileUploads;
    public $name;
    public $SKU;
    public $price;
    public $stock;
    public $description;
    public $category;
    public $photo;

    protected $rules = [
        'photo' => 'required',
        'name' => 'required',
        'SKU' => 'required',
        'price' => 'required',
        'stock' => 'required',
    ];

    public function render()
    {
        return view('livewire.admin.form-new-product',[
            'categories' => Category::all(),
        ]);
    }

    public function create(){
        $this->validate();

        $product = Product::create([
            'name' => $this->name,
            'SKU' => $this->SKU,
            'price' => $this->price,
            'stock' => $this->stock,
            'description' => $this->description
        ]);

        $this->photo->store('productos');

        session()->flash('message', 'Producto agregado con exito');
    }
}
