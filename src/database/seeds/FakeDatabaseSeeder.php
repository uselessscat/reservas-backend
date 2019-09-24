<?php

use Illuminate\Database\Seeder;

class FakeDatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('RoleTableSeeder');
        $this->call('PersonsTableSeeder');

        $this->call('FakeRoleTableSeeder');
        $this->call('FakePersonsTableSeeder');
        $this->call('FakeBranchOfficesTableSeeder');
    }
}
