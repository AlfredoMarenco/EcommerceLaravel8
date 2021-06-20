<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    //Relaccion uno a muchos
    public function category()
    {
        return $this->hasMany(Category::class);
    }
}
