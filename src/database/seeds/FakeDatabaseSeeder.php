<?php

use Illuminate\Database\Seeder;

class FakeDatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('RolesTableSeeder');
        $this->call('PersonsTableSeeder');
        $this->call('ServiceTableSeeder');

        $this->call('FakeRoleTableSeeder');
        $this->call('FakePersonsTableSeeder');
        $this->call('FakeBranchOfficesTableSeeder');
        $this->call('FakeServiceTableSeeder');
    }
}
