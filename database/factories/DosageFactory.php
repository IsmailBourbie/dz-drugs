<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DosageFactory extends Factory
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
            'suffix' => $this->faker->word() . rand(100, 999)
        ];
    }
}