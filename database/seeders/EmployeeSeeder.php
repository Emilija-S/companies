<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = Company::query()->find(1);
        $company->employees()->createMany([
            [
                'name' => 'Emilija',
                'uid' => '000022209999944477120000',
                'address' => 'Test_1'
            ],
            [
                'name' => 'Ivana',
                'uid' => '0000222033336667120000',
                'address' => 'Test_2'
            ],
        ]);
    }
}
