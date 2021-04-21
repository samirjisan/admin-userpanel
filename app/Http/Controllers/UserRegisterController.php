<?php

namespace App\Http\Controllers;
use App\user;

use Illuminate\Http\Request;

class UserRegisterController extends Controller
{
    public function index()
    {
        return view('user.register');

    }

    public function register()
    {

        $this->validate(request(),[
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
            'image' => 'max:1024'
        ]);

        if(request()->hasFile('image')) {
            $imageName = uniqid().'.jpg';
            request()->file('image')->move('image/',$imageName);
            User::create([
                'username' => request('username'),
                'email' => request('email'),
                'password' => bcrypt(request('password')),
                'image' => $imageName
            ]);
        }else{
            User::create([
                'username' => request('username'),
                'email' => request('email'),
                'password' => bcrypt(request('password')),
            ]);
        }

        return 'registered';

    }
}
