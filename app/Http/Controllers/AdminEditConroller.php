<?php

namespace App\Http\Controllers;


use App\User;
use App\Admin;
use App\Operator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminEditConroller extends Controller
{

    public function edit($operator_id)
    {

        $data = Operator::where($operator_id);
//        $data -> operator_name=Input::get('operator_name');
//        $data -> operator_name=Input::get('operator_email');
        return view('adminAccess.edit',compact('data'));
    }

    public function update($operator_id)
    {
        $data = Operator::where($operator_id);
        $data->update([
            'operator_name' => request('operator_name'),
            'operator_email' => request('operator_email')
        ]);

        //return redirect()->route('adminAccess.index');
    }

}
