<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pet;
use Faker\Generator as Faker;

$factory->define(Pet::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'person_id' => rand(1,100),
        'color' => $faker->colorName,
        'birthday' => $faker->date(),
    ];
});
