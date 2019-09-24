<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class FakeRoleTableSeeder extends Seeder
{
    public function run()
    {
        factory(Role::class, 10)->create();
    }
}
