<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Model\Product;
use App\Models\Model\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 10 users
        User::factory(10)->create();

        // Create 20 products
        Product::factory(50)->create();

        // Optionally: create 50 reviews linked to products and users
        Review::factory(300)->create();
    }
}
