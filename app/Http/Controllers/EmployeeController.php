<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeController extends Controller
{
    public function show(Employee $employee): AnonymousResourceCollection
    {
        $salaries = Salary::query()->where('employee_id', '=', $employee->id)->get();
        return JsonResource::collection($salaries);
    }

    public function averageSalary(int $id): float|int|null
    {
        $salaries = Salary::query()->where('employee_id', '=', $id)->get();
        return $salaries->avg('salary');
    }
}
