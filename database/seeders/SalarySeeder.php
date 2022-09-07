<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = Employee::query()->find(2);
        $employee->salaries()->createMany([
            [
                'salary' => 2000,
                'date' => '2022-09-07',
            ],
            [
                'salary' => 3000,
                'date' => '2022-08-07',
            ]
        ]);
    }
}
