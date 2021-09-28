<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnotherController extends Controller
{
    public function getAnotherData(Request $req){

        return DB::select('select * from another');

    }
}
