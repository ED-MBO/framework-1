<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@spelapp.nl',
            'password' => 'password',
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'Speler',
            'email' => 'speler@spelapp.nl',
            'password' => 'password',
            'role_id' => 2,
        ]);
    }
}
