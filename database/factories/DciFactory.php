<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DciFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'tarif' => rand(100, 1000)
        ];
    }
}
