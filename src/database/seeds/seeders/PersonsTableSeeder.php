<?php

use App\Models\Person;
use Illuminate\Database\Seeder;

class PersonsTableSeeder extends Seeder
{
    public function run()
    {
        $defaultUsers = [
            [
                'id' => 1,
                'name' => 'system',
                'last_name' => 'system',
                'email' => 'system@localhost',
            ], [
                'id' => 2,
                'name' => 'developer',
                'last_name' => 'developer',
                'email' => 'developer@localhost',
            ], [
                'id' => 3,
                'name' => 'Administator',
                'last_name' => 'Administrator',
                'email' => 'developer@localhost',
            ],
        ];

        foreach ($defaultUsers as $user) {
            (new Person($user))->save();
        }
    }
}
