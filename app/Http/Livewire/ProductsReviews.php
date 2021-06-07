<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use Livewire\Component;

class ProductsReviews extends Component
{
    public $product_id;
    public $comment;
    public $rating = 100;
    public $order_id;
    public $visible = true;

    public function mount(Product $product, Order $order)
    {
        $this->product_id = $product->id;
        $this->order_id = $order->id;
    }

    public function getPercent($value)
    {
        $this->rating = ($value * 100) / (5);
    }

    public function setReview($product, $order)
    {
        Review::create([
            'comment' => $this->comment,
            'rating' => ($this->rating * 5) / (100),
            'user_id' => auth()->user()->id,
            'product_id' => $product,
            'status' => 0,
            'order_id' => $order
        ]);
        $this->visible = false;
    }
    public function render()
    {
        $product = Product::find($this->product_id);

        return view('livewire.products-reviews', compact('product'));
    }
}
