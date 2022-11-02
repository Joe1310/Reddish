<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Hardcode one player
        $a = new Player;
        $a->alias = "HorridJoe";
        $a->position = 2;
        $a->rank = "divine";
        $a->country = "England";
        $a->save();

        // use faker to generate 50 players
        Player::factory()->count(50)->create();
    }
}
