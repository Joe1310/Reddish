<?php

namespace Database\Factories;
use App\Models\Player;
use App\Models\Post;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $number_of_players = count(Player::all());
        $number_of_posts = count(Post::all());
        return [
            'comment'=>fake()->realText($maxNBChars=145),
            'post_id'=>fake()->numberBetween(1, $number_of_posts),
            'player_id'=>fake()->numberBetween(1, $number_of_players)
        ];
    }
}
