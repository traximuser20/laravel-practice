<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function show(){
        return "Hello from Controller";
    }

    function loadView(){
        return view('hello',['name'=>'Azeem']); 
    }
}
