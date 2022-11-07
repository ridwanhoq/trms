<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id'       => Category::first()->id,
            'hosted_by'         => User::first()->id,
            'title_en'          => $this->faker->unique()->uuid(),
            'title_bn'          => $this->faker->unique()->uuid(),
            'description_en'    => $this->faker->sentence(),
            'description_bn'    => $this->faker->sentence(),
            'video_link'        => $this->faker->url()
        ];
    }
}
