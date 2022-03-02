<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->unique()->ean13(),
            'category_id' => $this->faker->numberBetween(1, 14),
            'manufacturer_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->unique()->words(2, true),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(3, 1500),
            'units_in_stock' => $this->faker->numberBetween(1, 100),
            'low_stock_threshold' => $this->faker->numberBetween(3, 20),
            'cash_discount_rate' => $this->faker->numberBetween(1, 10),
            'card_discount_rate' => $this->faker->numberBetween(1, 7),
            'discount_locked' => $this->faker->numberBetween(0, 1),
            'discount_assigned_at' => Carbon::now()->format('Y-m-d H:i:s')

        ];
    }
}
