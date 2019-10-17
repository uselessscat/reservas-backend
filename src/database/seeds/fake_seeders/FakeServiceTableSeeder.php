<?php
use App\Models\Service;
use App\Models\Requeriment;
use Illuminate\Database\Seeder;

class FakeServiceTableSeeder extends Seeder
{
    public function run()
    {
        factory(Service::class, 10)->create()->each(function($service){
            $service->requeriments()->save(factory(Requeriment::class)->make());
        });
    }
}