<?php

use App\Models\PlaceType;

$factory->define(PlaceType::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->randomElement(['Place ', 'Room ']) . $faker->word,
    ];
});
