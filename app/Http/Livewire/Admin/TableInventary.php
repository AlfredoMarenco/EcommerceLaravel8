<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class TableInventary extends Component
{
    use WithPagination;
    public $search;
    public $paginate = '10';
    public $category_id;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.admin.table-inventary', [
            'products' => Product::where('name', 'like', '%' . $this->search . '%')->latest('id')->paginate($this->paginate),
        ]);
    }
}
