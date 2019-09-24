<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
        $defaultRoles = [
            [
                'name' => 'full',
            ], [
                'name' => 'developer',
            ], [
                'name' => 'administrator',
            ], [
                'name' => 'client',
            ],
        ];

        foreach ($defaultRoles as $role) {
            (new Role($role))->save();
        }
    }
}
