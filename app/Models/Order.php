<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a uno
    public function coupon(){
        return $this->hasOne(Coupon::class);
    }

    //Relacion muchos a muchos
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quanty','price','color','size');
    }

    //Relacion uno a muchos inversa
    public function shipping_address()
    {
        return $this->belongsTo(ShippingAddress::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
