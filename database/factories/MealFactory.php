<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Meal;
use App\Models\Allergies;
use Faker\Generator as Faker;
// use FakerRestaurant\Restaurant as Faker;
use FakerRestaurant\Provider\en_US\Restaurant;



$factory->define(Meal::class, function () {
    $faker = \Faker\Factory::create();
    $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
    return [
        //




        'allergies_id' => function () {
            return Allergies::all()->random();
        },



        'main_item' => $faker->foodName(),
        'side_item1' => $faker->vegetableName(),
        'side_item2' =>  $faker->fruitName(),
    ];
});
