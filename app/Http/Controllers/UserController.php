<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getData(Request $req){

        return DB::select('select * from users');

    }

    public function getAnotherData(Request $req){
        return DB::select("select * from anothertable");
    }
}
