<?php

use App\Models\EquipmentType;
use Illuminate\Database\Seeder;

class FakeEquipmentTypeTableSeeder extends Seeder
{
    public function run()
    {
        factory(EquipmentType::class, 10)->create();
    }
}
