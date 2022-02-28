<?php

namespace Database\Factories;

use App\Models\Post;
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
            'user_id' => $this->faker->numberBetween(1,100),
            'title' => $this->faker->sentence,
            'body' => $this->faker->text(),
            'is_premium' => $this->faker->boolean,
            'created_at' => $this->faker->dateTimeBetween('2020-01-01','2021-12-31'),
            'deleted_at' => $this->faker->randomElement([
                null,
                $this->faker->dateTimeBetween('2020-01-01','2021-12-31')
            ])
        ];
    }
}
