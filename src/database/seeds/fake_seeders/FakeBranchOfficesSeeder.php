<?php

use App\Models\BranchOffice;
use Illuminate\Database\Seeder;

class FakeBranchOfficesTableSeeder extends Seeder
{
    public function run()
    {
        factory(BranchOffice::class, 5)->create();
    }
}
