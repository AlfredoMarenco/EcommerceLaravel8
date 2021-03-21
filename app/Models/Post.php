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

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
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
}
