<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index(){


        return view('admin.login');


    }

    public function login(){

//        $email = request('email');
//        $password = request('password');

        if(Auth::guard('admin')->attempt(['email' => request('email'),'password' => request('password')])){
            return redirect()->route('admin.dashboard');
              //  return 'login successfully';
        }else{
            return redirect()->route('admin.login')->with('loginRequest','Try Again');
        }
    }

    public function logout(){

        Auth::guard('admin')->logout();
        return redirect()->route('admin.login.show');

    }

    public function dashboard(){

//        $admins = Auth::guard('admin');

        $admins = Admin::latest()->get();

        return view('admin.showAdmins',compact('admins'));

    }
}
