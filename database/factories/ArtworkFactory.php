<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArtworkFactory extends Factory
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
            // 'data_name' => $this->faker->randomElement(['nature', 'building', 'people', 'drawing', 'miniature', 'abstrak', 'pixel'], 7),
            'title' => $this->faker->sentence(mt_rand(2,4)),
            'slug' => $this->faker->slug(3),
            'caption' => $this->faker->sentence(10)
        ];
    }
}
