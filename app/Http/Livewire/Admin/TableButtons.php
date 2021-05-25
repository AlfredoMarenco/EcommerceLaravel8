<?php

namespace App\Http\Livewire\Admin;

use App\Models\Button;
use Livewire\Component;

class TableButtons extends Component
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
        return view('livewire.admin.table-buttons', [
            'buttons' => Button::where('text','like','%'.$this->search.'%')->latest('id')->paginate($this->paginate),
        ]);
    }
}
