<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function addMembers(Request $req){
        $members = new User();
       // return $req->name;

        $members->name = $req->name;
        $members->email = $req->email;
        $members->password = $req->password;


        $members->save();

        return redirect('add');

    }

    public function list(){
        $data = User::all();
        return view('list', ['members'=>$data]);
    }

    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect('list');
    }
}
