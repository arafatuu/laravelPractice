<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function fileUp(Request $req){
        $ext = $req->file('file')->getClientOriginalExtension();
        return $req->file('file')-> storeAS('docs', 'arafat.' . $ext); 
                                  
    } 
}
