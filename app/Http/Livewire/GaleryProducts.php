<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GaleryProducts extends Component
{
    public $product;

    public function render()
    {
        return view('livewire.galery-products');
    }
}
