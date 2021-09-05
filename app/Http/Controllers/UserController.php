<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCOntroller extends Controller
{
    //
   function viewLOad(){
       $data = ['Arafat', 'Rahman', 'Tasnim', 'Zahan', 'Tithy'];
    return view('user',['user'=>'Arafat', 'users'=>$data]);
   }
}
