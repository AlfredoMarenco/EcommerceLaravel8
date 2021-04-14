<?php

namespace App\Http\Livewire;

use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Discount extends Component
{
    public $priceMin = 0;
    public $priceMax = 99999;
    public $size = [];
    public $color = [];

    public function render()
    {
        if ($this->color == null) {
            return view('livewire.discount', [
                'products' => Product::where('discount','>',0)->whereBetween('price', [$this->priceMin, $this->priceMax])->inRandomOrder()->paginate(15),
                'colors' => Color::all(),
                'sizes' => Size::all(),
            ]);
        } else {
            return view('livewire.discount', [
                'products' => Product::whereHas('colors', function (Builder $query) {
                    $query->where('id', 'like', $this->color);
                })->whereBetween('price', [$this->priceMin, $this->priceMax])->inRandomOrder()->paginate(15),
                'colors' => Color::all(),
                'sizes' => Size::all(),
            ]);
        }
    }
}
