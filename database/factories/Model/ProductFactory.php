<?php

namespace Database\Factories\Model;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Model\Product;

/**
 * @extends Factory<\App\Models\Model\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true),
            'detail' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween(100, 1000),
            'stock' => $this->faker->randomDigit(),
            'discount' => $this->faker->numberBetween(2, 30),
        ];
    }
}
