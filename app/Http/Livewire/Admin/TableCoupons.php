<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;
use Livewire\WithPagination;

class TableCoupons extends Component
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
        return view('livewire.admin.table-coupons',
        ['coupons' => Coupon::where('code', 'like', '%' . $this->search . '%')->latest('id')->paginate(10),]
    );
    }
}
