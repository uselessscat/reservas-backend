<?php

use Illuminate\Database\Seeder;

class FakeDatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('RoleTableSeeder');
        $this->call('PersonTableSeeder');
        $this->call('ServiceTableSeeder');

        $this->call('FakeRoleTableSeeder');
        $this->call('FakePersonTableSeeder');
        $this->call('FakeBranchOfficeTableSeeder');
        $this->call('FakeServiceTableSeeder');
        $this->call('FakeEquipmentTypeTableSeeder');
        $this->call('FakePlaceTypeTableSeeder');
    }
}
