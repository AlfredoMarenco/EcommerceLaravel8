<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class TableCategories extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view(
            'livewire.admin.table-categories',
            ['categories' => Category::where('name', 'like', '%' . $this->search . '%')->latest('id')->paginate(10),]
        );
    }
}
