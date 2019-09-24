<?php

use Illuminate\Database\Seeder;

class FakeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('RoleTableSeeder');
        $this->call('PersonsTableSeeder');

        $this->call('FakeRoleTableSeeder');
        $this->call('FakePersonsTableSeeder');
    }
}
