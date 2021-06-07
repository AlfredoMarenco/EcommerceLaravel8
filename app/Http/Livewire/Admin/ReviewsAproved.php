<?php

namespace App\Http\Livewire\Admin;

use App\Models\Review;
use Livewire\Component;

class ReviewsAproved extends Component
{
    public $status;
    public $review_id;

    public function mount(Review $review)
    {
        $this->status = $review->status;
        $this->review_id = $review->id;
    }

    public function mostrar(Review $review)
    {
        $review->update([
            'status' => 1,
        ]);

        $this->status = 1;
    }

    public function ocultar(Review $review)
    {
        $review->update([
            'status' => 0,
        ]);
        $this->status = 0;
    }
    public function render()
    {
        return view('livewire.admin.reviews-aproved');
    }
}
