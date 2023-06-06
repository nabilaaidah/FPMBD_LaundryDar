<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function updateTimestamps(){
        $services = service::all();

        foreach($services as $service){
            $service->update([
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        return "Timestamps updated for all employees.";    
    }
}
