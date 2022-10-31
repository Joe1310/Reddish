<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Hardcode two animals
        $a = new Animal;
        $a->name = "Joe";
        $a->animalType = "Chad";
        $a->weight = 100.0;
        $a->save();

        $b = new Animal;
        $b->name = "Jacob";
        $b->animalType = "Chimp";
        $b->weight = 500.0;
        $b->save();

        // Use faker to generate 50 animals
        Animal::factory()->count(50)->create();
    }
}
