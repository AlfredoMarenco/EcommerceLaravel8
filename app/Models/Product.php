<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $withCount = ['reviews'];

    const ONLINE = 0;
    const STORE = 1;
    //Relacion muchos a muchos
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quanty', 'price', 'color', 'size');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withPivot('id', 'category_id');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class)->withTimestamps();
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class)->withTimestamps();
    }

    public function details()
    {
        return $this->belongsToMany(Details::class);
    }

    //Relacion uno a muchos
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    //Relacion uno a muchos inversa la
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    //Relacion uno a muchos polimorfica
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    //Relacion uno a uno polimorfica
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    //Estableciendo formato a los precios
    public function presentPrice()
    {
        return '$' . number_format($this->price, 2);
    }

    public function presentPriceDiscount()
    {
        return '$' . number_format($this->discount, 2);
    }

    public function getRatingAttribute()
    {
        if ($this->reviews_count) {
            return round($this->reviews->avg('rating'), 1);
        } else {
            return 5;
        }
    }
}
