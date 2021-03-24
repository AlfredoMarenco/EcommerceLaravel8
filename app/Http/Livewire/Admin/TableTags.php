<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class TableTags extends Component
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
        return view('livewire.admin.table-tags', [
            'tags' => Tag::where('name', 'like', '%' . $this->search . '%')->latest('id')->paginate($this->paginate),
        ]);
    }
}
