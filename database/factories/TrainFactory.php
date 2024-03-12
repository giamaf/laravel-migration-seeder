<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firm' => fake()->company(),
            'departure_city' => fake()->city(),
            'arrival_city' => fake()->city(),
            'departure_time' => fake()->date(),
            'arrival_time' => fake()->date(),
            'train_code' => fake()->numerify('FR####'),
            'vagon_number' => fake()->randomDigit(),
            'on_time' => rand(0, 1),
            'deleted' => rand(0, 1),
        ];
    }
}