<?php

use App\Models\EquipmentType;

$factory->define(EquipmentType::class, function (Faker\Generator $faker) {
    return [
        'name' => ucwords($faker->word) . $faker->randomElement([' Equipment', ' Machine', ' Device']),
    ];
});
