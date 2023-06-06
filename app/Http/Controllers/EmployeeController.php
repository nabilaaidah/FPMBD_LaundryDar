<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function updateTimestamps(){
        $employees = employee::all();

        foreach($employees as $employee){
            $employee->update([
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        return "Timestamps updated for all employees.";    
    }

}
