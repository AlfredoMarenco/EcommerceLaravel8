<?php

namespace App\Http\Livewire\Admin;

use App\Models\Mosaic;
use Livewire\Component;

class TableMosaic extends Component
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
        return view('livewire.admin.table-mosaic',[
            'mosaics' => Mosaic::where('text','like','%'.$this->search.'%')->paginate($this->paginate),
        ]);
    }
}
