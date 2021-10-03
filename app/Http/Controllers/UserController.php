<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function getData(Request $req){

        return DB::select('select * from users');

    }

    public function getAnotherData(Request $req){
        return DB::select("select * from anothertable");
    }

    public function getThrowModel(){
        $data = User::paginate(5);
        return view('pagination', ['members'=>$data]);
    }
}
