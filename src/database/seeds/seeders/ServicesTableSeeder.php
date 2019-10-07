<?php

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    public function run()
    {
        $defaultService = [
            [
                'name' => 'Pedicure',
                'description' => 'Se hace pedicure',
            ], [
                'name' => 'Teñir pelo',
                'description' => 'Teñir pelo',
            ], [
                'name' => 'Barberia',
                'description' => 'Incluye corte y asicalado de barba',
            ], 
        ];
    
        foreach ($defaultService as $service) {
            (new Service($service))->save();
        }
    }
}
