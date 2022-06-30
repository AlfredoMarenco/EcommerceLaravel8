<?php

namespace App\Http\Livewire\Admin;

use App\Models\Video;
use Livewire\Component;
use Livewire\WithPagination;

class TableVideos extends Component
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
        return view('livewire.admin.table-videos',
            ['videos' => Video::where('name', 'like', '%' . $this->search . '%')->latest('id')->paginate(10),]
        );
    }
}