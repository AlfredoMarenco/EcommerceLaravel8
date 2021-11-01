<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;

class OrderExport implements FromQuery
{
    use Exportable;

    private $date_start, $date_end;

    public function __construct($date_star, $date_end)
    {
        $this->date_star = $date_star;
        $this->date_end = $date_end;
    }

    public function query()
    {
        return Order::query()->whereBetween('created_at', [$this->date_start, $this->date_end]);
    }
}
