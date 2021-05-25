<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuponf extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    //Relaccion uno a uno
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
