<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
