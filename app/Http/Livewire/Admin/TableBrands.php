<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use Livewire\Component;

class TableBrands extends Component
{

    public $search;
    public $paginate = '10';

    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.admin.table-brands',[
            'brands' => Brand::where('name','like','%'.$this->search.'%')->latest('id')->paginate($this->paginate),
        ]);
    }
}
