<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpClientController extends Controller
{
    public function getHttpData(){
        $items = Http::get("https://reqres.in/api/users?page=1");
        return view('httpClient',['items'=>$items['data']]);
    }
}
