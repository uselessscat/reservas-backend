<?php

use App\Models\Person;

$factory->define(Person::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
    ];
});
