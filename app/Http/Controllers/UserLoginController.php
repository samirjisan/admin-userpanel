<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function index()
    {
        return view('user.login');
    }

    public function login()
    {
        $username = request('username');
        $password = request('password');
        if(Auth::attempt(['username' => $username,'password' => $password])){
            return redirect()->route('user.show');
        }else{
            return redirect()->route('user.login')->with('loginRequest','Try Again');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login.show');
    }
}