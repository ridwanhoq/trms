<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Training;
use App\Models\TrainingParticipant;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //facroy
        User::factory()->count(10)->create();
        Category::factory()->count(10)->create();
        Training::factory()->count(10)->create();
        TrainingParticipant::factory()->count(10)->create();


    }


}
