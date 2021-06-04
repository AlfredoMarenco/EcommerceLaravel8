<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    const DESACTIVADO = 0;
    const ACTIVO = 1;
    const AMOUNT = 'AMONUT';
    const PERCENTAGE = 'PERCENTAGE';

    //Relacion uno a uno inversa
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function findByCode($code)
    {
        return self::where('code', $code)->first();
    }

    public function discount($total)
    {
        if ($this->type == 'fixed') {
            return $this->value;
        } elseif ($this->type == 'percent') {
            return round(($this->percent_off / 100) * $total);
        } else {
            return 0;
        }
    }
}
