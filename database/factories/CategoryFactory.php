<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title_en'  => $this->faker->name(),
            'title_bn'  => $this->faker->name(),
            ''
        ];
    }
}
