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
                'uid' => '0000222099999444722337120000',
                'address' => 'Test_1'
            ],
            [
                'name' => 'Ivana',
                'uid' => '000022203333666712003300',
                'address' => 'Test_2'
            ],
        ]);

        $company = Company::query()->find(2);
        $company->employees()->createMany([
            [
                'name' => 'XX1',
                'uid' => '0000222099944492222294447711120000',
                'address' => 'Test_3'
            ],
            [
                'name' => 'Ivana11',
                'uid' => '00002227777033322553666712088000',
                'address' => 'Test_4'
            ],
        ]);

        $company = Company::query()->find(3);
        $company->employees()->createMany([
            [
                'name' => 'Ana',
                'uid' => '000022209999944474009947778120000',
                'address' => 'Test_5'
            ],
            [
                'name' => 'Milan',
                'uid' => '00002220333377336667000445598120000',
                'address' => 'Test_6'
            ],
        ]);
    }
}
