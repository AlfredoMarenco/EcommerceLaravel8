<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $withCount = ['products'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function catalogue()
    {
        return $this->belongsTo(Catalogue::class);
    }

    public function buttons()
    {
        return $this->belongsTo(Button::class);
    }
}
