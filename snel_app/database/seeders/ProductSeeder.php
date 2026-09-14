<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Minecraft',
            'description' => 'Bouw en ontdek in een blokkenwereld.',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Controller',
            'description' => 'Draadloze gamecontroller.',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Fortnite',
            'description' => 'Battle royale met builds.',
            'category_id' => 1,
        ]);
    }
}
