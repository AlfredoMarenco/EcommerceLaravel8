<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\Size;
use Livewire\Component;
use Livewire\WithPagination;

class TableVariants extends Component
{
    use WithPagination;
    public $search;
    public $paginate = '10';

    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.admin.table-variants', [
            'products' => Product::where('name', 'like', '%' . $this->search . '%')->latest('id')->paginate($this->paginate),
        ]);
    }
}
