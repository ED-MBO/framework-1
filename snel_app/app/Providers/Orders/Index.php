<?php

namespace App\Providers\Orders;

use App\Models\Order;

class Index
{
    public function index()
    {
        $orders = Order::with(['user', 'orderrows.product'])->get();

        return $orders->toArray();
    }
}
