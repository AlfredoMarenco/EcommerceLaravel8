<?php

namespace App\Exports;

use App\Models\Order;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class OrdersExport implements FromView
{

    public function __construct($date_start, $date_end)
    {
        $this->date_start = $date_start;
        $this->date_end = $date_end;
    }

    public function view(): View
    {
        return view('admin.exports.orders', [
            'orders' => Order::whereBetween('created_at', [$this->date_start, $this->date_end])->get()
        ]);
    }
}
