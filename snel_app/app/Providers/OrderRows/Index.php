<?php

namespace App\Providers\OrderRows;

use App\Models\OrderRow;

class Index
{
    public function index()
    {
        $orderrows = OrderRow::with(['order', 'product'])->get();

        return $orderrows->toArray();
    }
}
