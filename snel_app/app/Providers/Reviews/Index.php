<?php

namespace App\Providers\Reviews;

use App\Models\Review;

class Index
{
    public function index()
    {
        $reviews = Review::with(['user', 'product'])->get();

        return $reviews->toArray();
    }
}
