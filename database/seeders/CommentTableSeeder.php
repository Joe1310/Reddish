<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // hardcode one comment
        $a = new Comment;
        $a->player_id = 51;
        $a->post_id = 20;
        $a->comment = "a comment, wow";
        $a->save();
    }
}
