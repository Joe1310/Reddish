<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Player;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // use faker to generate 50 users
        User::factory()->has(
            Player::factory()->has(
                Post::factory()->has(
                    Comment::factory()->count(3))
                    ->count(2))
                ->count(1))
            ->count(50)->create();

        // Hardcode one user
        $a = new User;
        $a->name = "Joe Henry";
        $a->email = "2035032@swansea.ac.uk";
        $a->password = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"; // hashed password = password
        $a->role = "admin"; // admin user
        $a->save();
    }
}
