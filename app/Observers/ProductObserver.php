<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductObserver
{

    public function created(Product $product)
    {
        //
    }

    public function deleting(Product $product)
    {
        /* if ($product->image) {
            Storage::delete($product->image->url);
        } */
    }

}
