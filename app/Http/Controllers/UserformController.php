<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserformController extends Controller
{
    //
    function getData(Request $req){

        $req->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        return $req->input();
    }
}
