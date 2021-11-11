<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LiteraturFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1,4),
            'category_id' => mt_rand(1,3),
            'title' => $this->faker->sentence(mt_rand(2,4)),
            'slug' => $this->faker->slug(3),
            'body' => $this->faker->paragraph(20)
        ];
    }
}
