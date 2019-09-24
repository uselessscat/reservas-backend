<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('RoleTableSeeder');
        $this->call('PersonsTableSeeder');
    }
}
