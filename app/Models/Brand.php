<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];
    protected $withCount = ['products'];

    //Relacion uno a muchos
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    //Relaccion uno a uno
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
