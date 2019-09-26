<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('RolesTableSeeder');
        $this->call('PersonsTableSeeder');
        $this->call('ContactTypesTableSeeder');
    }
}
