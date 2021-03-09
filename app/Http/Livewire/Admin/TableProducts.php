<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class TableProducts extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.admin.table-products', [
            'products' => Product::where('name','like','%'.$this->search.'%')->latest('id')->paginate(10),
        ]);
    }
}
