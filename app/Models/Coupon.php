<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    const DESACTIVADO = 0;
    const ACTIVO = 1;
    const AMOUNT = 'AMONUT';
    const PERCENTAGE = 'PERCENTAGE';

    //Relacion uno a uno inversa
    public function order(){
        return $this->belongsTo(Order::class);
    }
}
