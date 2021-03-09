<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    //Relacion muchos a muchos
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function colors(){
        return $this->belongsToMany(Color::class);
    }

    public function sizes(){
        return $this->belongsToMany(Size::class);
    }

    //Relacion uno a muchos polimorfica
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    //Relacion uno a muchos polimorfica
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    //Estableciendo formato a los precios
    public function presentPrice()
    {
        return '$' . number_format($this->price, 2);
    }
}
