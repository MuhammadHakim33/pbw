<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Muhammad Hakim',
            'email' => 'hakim@gmail.com',
            'password' => bcrypt('user12345'),
            'email_verified_at' => now(),
        ]);
    }
}
