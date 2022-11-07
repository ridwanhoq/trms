<?php

namespace Database\Factories;

use App\Models\Training;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainingParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'training_id'   => Training::first()->id,
            'user_id'       => User::first()->id
        ];
    }
}
