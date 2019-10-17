<?php

use App\Models\Service;

$factory->define(Service::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
    ];
});
