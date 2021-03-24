<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class TablePost extends Component
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
        return view('livewire.admin.table-post', [
            'posts' => Post::where('title', 'like', '%' . $this->search . '%')->latest('id')->paginate($this->paginate),
        ]);
    }
}
