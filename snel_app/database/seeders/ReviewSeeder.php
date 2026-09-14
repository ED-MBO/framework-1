<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        Review::create([
            'comment' => 'Geweldig spel om creatief bezig te zijn.',
            'user_id' => 2,
            'product_id' => 1,
        ]);

        Review::create([
            'comment' => 'Stevige controller, fijn in de hand.',
            'user_id' => 2,
            'product_id' => 2,
        ]);
    }
}
