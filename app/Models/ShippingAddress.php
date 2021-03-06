<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    //Relacion uno a muchos
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
