<?php

use App\Models\Person;
use Illuminate\Database\Seeder;

class FakePersonTableSeeder extends Seeder
{
    public function run()
    {
        factory(Person::class, 100)->create()
            ->each(function ($person) {
                $person->roles()->attach(rand(2, 14));
            });
    }
}
