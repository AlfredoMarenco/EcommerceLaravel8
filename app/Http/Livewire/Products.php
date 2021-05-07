<?php

namespace App\Http\Livewire;

use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Products extends Component
{
    public $priceMin = 0;
    public $priceMax = 99999;
    public $size = [];
    public $color = [];

    public function render()
    {
        return view('livewire.products', [
            'products' => Product::where('type', 0)->latest('id')->paginate(10),
        ]);
    }
}
