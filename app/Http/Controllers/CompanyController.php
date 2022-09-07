<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $companies = Company::all();
        return JsonResource::collection($companies);
    }

    public function show(Company $company): AnonymousResourceCollection
    {
        $employees = Employee::query()->where('company_id', '=', $company->id)->get();
        return JsonResource::collection($employees);
    }

    public function companyAverageSalary(Company $company): JsonResource
    {
        $employees = Salary::query()
            ->join('employees','employees.id','=','salaries.employee_id')
            ->where('company_id', '=', $company->id)
            ->average('salary');

        return JsonResource::make(collect(number_format((float)$employees, 2)));
    }
}
