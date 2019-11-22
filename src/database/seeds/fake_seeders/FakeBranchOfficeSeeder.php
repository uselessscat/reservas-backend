<?php

use App\Models\BranchOffice;
use Illuminate\Database\Seeder;

class FakeBranchOfficeTableSeeder extends Seeder
{
    public function run()
    {
        factory(BranchOffice::class, 5)->create();
    }
}
