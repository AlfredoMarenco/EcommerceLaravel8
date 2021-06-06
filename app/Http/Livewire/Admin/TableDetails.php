<?php

namespace App\Http\Livewire\Admin;

use App\Models\Detail;
use Livewire\Component;
use Livewire\WithPagination;

class TableDetails extends Component
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
            'livewire.admin.table-details',
            ['details' => Detail::where('name', 'like', '%' . $this->search . '%')->latest('id')->paginate(10),]
        );
    }
}
