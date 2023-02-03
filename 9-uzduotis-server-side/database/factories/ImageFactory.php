<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->company(),           
            'alt' => $this->faker->firstName(),
            'url' => $this->faker->imageUrl(),
            'description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
        ];
    }
}
