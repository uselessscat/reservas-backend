<?php

use App\Models\PlaceType;
use Illuminate\Database\Seeder;

class FakePlaceTypeTableSeeder extends Seeder
{
    public function run()
    {
        factory(PlaceType::class, 10)->create();
    }
}
