<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CountItemsToCart extends Component
{

    public $count = 1;

    public function render()
    {
        return view('livewire.count-items-to-cart');
    }

    public function increment(){
        $this->count++;
    }
    public function decrement(){
        if ($this->count > 1) {
            $this->count--;
        }

    }
}
