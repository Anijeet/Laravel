<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUsername($name){
        return view('getuser',['name'=>$name]);
    }

    function about(){
        return view('about');
    }
}
