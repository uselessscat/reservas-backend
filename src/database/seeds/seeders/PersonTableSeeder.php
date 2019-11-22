<?php

use App\Models\Person;
use Illuminate\Database\Seeder;

class PersonTableSeeder extends Seeder
{
    public function run()
    {
        $defaultUsers = [
            [
                'name' => 'system',
                'last_name' => 'system',
                'email' => 'system@localhost',
            ], [
                'name' => 'developer',
                'last_name' => 'developer',
                'email' => 'developer@localhost',
            ], [
                'name' => 'administator',
                'last_name' => 'administrator',
                'email' => 'admin@localhost',
            ],
        ];

        foreach ($defaultUsers as $user) {
            (new Person($user))->save();
        }
    }
}
