<?php

use App\Models\Requeriment;

$factory->define(Requeriment::class, function (Faker\Generator $faker) {
    return [
        'requeriment_type' => 'role',
        'count' => $faker->randomDigit,
        'requeriment_type_id' => $faker->randomDigit,
    ];
});
