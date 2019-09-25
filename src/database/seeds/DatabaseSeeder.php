<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('RolesTableSeeder');
        $this->call('PersonTableSeeder');
        $this->call('ContactTypesTableSeeder');
    }
}
