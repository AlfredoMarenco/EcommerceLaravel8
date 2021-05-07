<?php

namespace App\Http\Livewire\Admin;

use App\Models\Catalogue;
use Livewire\Component;

class TableCatalogues extends Component
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
        return view('livewire.admin.table-catalogues', [
            'catalogues' => Catalogue::where('name','like','%'.$this->search.'%')->latest('id')->paginate($this->paginate),
        ]);
    }
}
