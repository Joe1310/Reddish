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
        $a->user_id = 51; // Joe
        $a->save();
    }
}
