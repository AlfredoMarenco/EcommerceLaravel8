<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion muchos a muchos polimorfica
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    //Relacion uno a muchos polimorfica
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
