<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => /*User::factory()->create()->id*/$this->faker->numberBetween($min = 4, $max = 100),
            'post_id' =>/* Post::factory()->create()->id*/$this->faker->numberBetween($min = 348, $max = 348),
            'message' => $this->faker->realText(500),
        ];
    }
}
