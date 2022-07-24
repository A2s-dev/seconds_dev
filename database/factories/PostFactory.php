<?php

namespace Database\Factories;

use App\Models\{Post, User};
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'title' => $this->faker->sentence(rand(1, 4)),
            'content' => $this->faker->realText(20000),
            'status' => $this->faker->boolean($chanceOfGettingTrue = 100),
            'released_at' => $this->faker->dateTime($max = 'now', $timezone = null),
        ];
    }
}
