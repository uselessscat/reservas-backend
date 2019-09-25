<?php

use App\Models\ContactType;
use Illuminate\Database\Seeder;

class ContactTypesTableSeeder extends Seeder
{
    public function run()
    {
        $defaultContactTypes = [
            [
                'name' => 'telephone',
            ], [
                'name' => 'email',
            ], [
                'name' => 'address',
            ],
        ];

        foreach ($defaultContactTypes as $contact_type) {
            (new ContactType($contact_type))->save();
        }
    }
}
