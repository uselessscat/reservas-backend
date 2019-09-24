<?php

use App\Models\Role;

$factory->define(Role::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->jobTitle,
    ];
});
