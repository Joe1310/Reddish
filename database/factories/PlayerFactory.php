<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // create a random player
            "alias" => fake()->userName(),
            "position" => fake()->numberBetween($min = 1, $max = 5),
            "rank" => fake()->randomElement(["immortal", "divine", "ancient", "legend", "archon", "crusader", "guardian", "herald", "uncalibrated"]),
            "country" => fake()->country()
        ];
    }
}
