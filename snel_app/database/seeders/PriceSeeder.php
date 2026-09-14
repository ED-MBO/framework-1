<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    public function run(): void
    {
        Price::create([
            'price' => 29.99,
            'effdate' => now(),
            'product_id' => 1,
        ]);

        Price::create([
            'price' => 49.99,
            'effdate' => now(),
            'product_id' => 2,
        ]);

        Price::create([
            'price' => 0.00,
            'effdate' => now(),
            'product_id' => 3,
        ]);
    }
}
