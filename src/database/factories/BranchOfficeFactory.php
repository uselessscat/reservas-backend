<?php

use App\Models\BranchOffice;

$factory->define(BranchOffice::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company,
    ];
});
