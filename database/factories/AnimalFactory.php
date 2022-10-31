<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // Create a random animal
            'name' => fake()->name(),
            'animalType' => fake()->randomElement(['Lion', 'PufferFish', 'Penguin', 'Chimp', 'Frog']),
            'weight' => fake()->randomFloat(2, 100, 500)
        ];
    }
}
