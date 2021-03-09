<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormEditProduct extends Component
{
    use WithFileUploads;
    public $name;
    public $SKU;
    public $price;
    public $stock;
    public $description;
    public $category;
    public $photo;
    public $photoOriginal;
    public $categoryOriginal;

    protected $rules = [
        'photo' => 'required',
        'name' => 'required',
        'SKU' => 'required',
        'price' => 'required',
        'stock' => 'required',
    ];

    public function mount(Product $product)
    {
        $this->name = $product->name;
        $this->SKU = $product->SKU;
        $this->price = $product->price;
        $this->stock = $product->stock;
        $this->description = $product->description;
        $this->photoOriginal = $product->images;
        $this->categoryOriginal = $product->categories;
    }

    public function render()
    {
        return view('livewire.admin.form-edit-product', [
            'categories' => Category::all(),
        ]);
    }

    public function update($id)
    {
       dd($id);
    }
}
