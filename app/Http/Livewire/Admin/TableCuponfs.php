<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cuponf;
use Livewire\Component;

class TableCuponfs extends Component
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
        return view('livewire.admin.table-cuponfs', [
            'cuponfs' => Cuponf::where('text', 'like', '%' . $this->search . '%')->latest('id')->paginate($this->paginate),
        ]);
    }
}
