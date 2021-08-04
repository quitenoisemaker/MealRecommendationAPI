<?php

use App\Models\Allergies;
use App\Models\Meal;
use Illuminate\Database\Seeder;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Meal::class, 50)->create();
    }
}
