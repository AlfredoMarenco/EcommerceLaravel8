<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class TableOrders extends Component
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
        return view('livewire.admin.table-orders', [
            'orders' => Order::whereHas('user',function(Builder $query){
                $query->where('name','like','%'.$this->search.'%');
            })->paginate($this->paginate),
        ]);
    }
}
