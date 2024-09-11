<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'email' => $faker->email,
        'address_id' => rand(1, 100),
    ];
});
