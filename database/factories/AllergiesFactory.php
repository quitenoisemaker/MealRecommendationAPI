<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Allergies;
use Faker\Generator as Faker;

$factory->define(Allergies::class, function (Faker $faker) {
    return [
        //

        //'name' => $faker->randomElement($array = array('Nut Allergy', 'ShellFish Allergy', 'SeaFood Allergy')),
    ];
});
