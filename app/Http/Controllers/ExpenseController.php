<?php

namespace App\Http\Controllers;

use App\Models\expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function updateTimestamps(){
        $expenses = expense::all();

        foreach($expenses as $expense){
            $expense->update([
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        return "Timestamps updated for all expense.";    
    }
}
