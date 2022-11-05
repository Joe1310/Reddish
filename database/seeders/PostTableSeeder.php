<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // hardcode one post
        $a = new Post;
        $a->title = "First Post";
        $a->content = "This is my first post :)";
        $a->player_id = 51;
        $a->save();
    }
}
