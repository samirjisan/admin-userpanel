<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\User;
use Illuminate\Http\Request;

class UserManageController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('user.showUsers',compact(['users']));
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit',compact('user'));

    }

    public function update($id)
    {
        $user = User::find($id);
        $user->update([
            'username' => request('username'),
            'email' => request('email')
        ]);

        return redirect()->route('user.show')->with('updateSuccess','Update Successfully!');

    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->route('user.show')->with('deleteSuccess','Deleted Successfully!');
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $user = User::where('title','LIKE','%'.$search_text.'%')->get();

        return view('user.search',compact('user'));
    }
}
