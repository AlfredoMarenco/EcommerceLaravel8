<?php

namespace App\Http\Livewire\Admin;

use App\Models\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class TableCollections extends Component
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
            'livewire.admin.table-collections',
            ['collections' => Collection::where('name', 'like', '%' . $this->search . '%')->latest('id')->paginate(10),]
        );
    }
}
