<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class TableUsers extends Component
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
        return view('livewire.admin.table-users', [
            'users' => User::where('name', 'like', '%' . $this->search . '%')->orWhere('email', 'like', '%'.$this->search.'%')->latest('id')->paginate($this->paginate),
        ]);
    }
}
