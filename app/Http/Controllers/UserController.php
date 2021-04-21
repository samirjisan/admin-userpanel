<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $name = "Muhammad(Sm)";
        return view('hello',compact('name'));
    }


    public function showTemplate(){

        return view('index');
    }


}