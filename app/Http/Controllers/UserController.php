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
    public function showData($id){
        $data = User::find($id);
        return view('editpage',['item'=>$data]);
    }
    public function update(Request $req){
        $data = User::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->password=$req->password;

        $data->save();

        return redirect('list');

    }
}
