<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Join extends Controller
{
    public function show(){
        return DB::table('employers')
        ->leftjoin('employees','employers.id',"=",'employees.employee_id')
        ->get();
    }
}
