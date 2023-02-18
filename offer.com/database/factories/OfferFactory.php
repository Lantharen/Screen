<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->emoji(),
            'description' => fake()->boolean ? fake()->realText : null,
            'min_price' => fake()->randomFloat(2, 100, 10000),
            'max_price' => fake()->boolean ? fake()->randomFloat(2, 10000, 100000) : null,
            'min_percent' => fake()->randomFloat(2, 1, 30),
            'max_percent' => fake()->boolean ? fake()->randomFloat(2, 30, 90) : null,
            'duration_in_seconds' => random_int(86400, 86400 * 5),
        ];
    }
}
