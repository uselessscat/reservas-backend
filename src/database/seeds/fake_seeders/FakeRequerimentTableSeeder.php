<?php

use App\Models\Requeriment;
use Illuminate\Database\Seeder;

class FakeRequerimentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Requeriment::class, 10)->create();
    }
}
