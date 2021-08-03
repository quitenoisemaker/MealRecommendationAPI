<?php


use App\Models\Meal;
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
        // $this->call(UserSeeder::class);
        // \App\Models\Meal::factory(50)->create();
        //$this->call(AllergiesSeeder::class);
        $this->call(MealSeeder::class);
    }
}
