<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::query()->create([
            'name' => Str::random(10),
            'address' => Str::random(20)
        ]);

        Company::query()->create([
            'name' => Str::random(10),
            'address' => Str::random(20)
        ]);

        Company::query()->create([
            'name' => Str::random(10),
            'address' => Str::random(20)
        ]);
    }
}
