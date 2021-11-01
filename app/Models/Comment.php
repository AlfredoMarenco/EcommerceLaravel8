<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Relacion muchos a muchos
    public function posts()
    {
        return $this->belongsToMany(Post::class)->withPivot('comment_id', 'post_id');
    }
}
