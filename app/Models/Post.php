<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;


    //Relacion uno a muchos inversa
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    //Relacion muchos a muchos
    public function comments()
    {
        return $this->belongsToMany(Comment::class);
    }
}
