<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DrugFactory extends Factory
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
            'slug' => $this->faker->slug() . rand(100, 999),
            'quantity' => $this->faker->numberBetween(10, 100)
        ];
    }
}
