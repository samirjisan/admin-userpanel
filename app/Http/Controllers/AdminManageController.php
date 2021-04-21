<?php

namespace App\Http\Controllers;
use App\User;
use App\Admin;
use App\Operator;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(isset($_GET['query']))
        {
            $search =  $_GET['query'];
        }
        else{
            $search = '';
        }

        //echo $search;
        if(!empty($search))
        {
//            $operators = Operator::where('operator_email'=>$search)->get();
            $operators = Operator::where('operator_email', 'like', '%' . $search . '%')->get();
           // dd($operators,1);
           // print_r($operators);
           // exit;
        }
        else{
            $operators = Operator::get();
            echo 1;
        }

        //$operators = Operator::get();
        return view('adminAccess.operator-list', compact('operators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // we are validating our inputs okay to avoid having error when inserting okay.
        $this->validate($request,[
            'operator_name' => 'required',
            'operator_email' => 'required',
            'operator_address' => 'required',
            'operator_phone' => 'required',
            'operator_logo' => 'image|max:2048',
        ]);

        $image =  $request->file('operator_logo');

        $image_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('operator_images'), $image_name);

        $operators = new Operator;
        $operators->operator_name = $request->operator_name;
        $operators->operator_email = $request->operator_email;
        $operators->operator_address = $request->operator_address;
        $operators->operator_phone = $request->operator_phone;
        $operators->operator_logo = $image_name;

        // dd($operators);
        $operators->save(); // THIS SAVE FUNCTION WILL SAVE THE DATA OKAY

        return redirect()->back()->with('flash_message_success', 'Operator Added Succssfully!');
// WE NEED TO GENERATE THIS CUSTOM FLASH MESSAGE OKAY. SO LET'S ADD THAT FIRST BEFORE INSERTING OKAY.
        $id = $request::get('operator_id');
        $operators = Operator::where('operator_id');
    }


    public function edit($id)
    {

        $data = Operator::where('operator_id',$id)->first();
        return view('adminAccess.edit-operator',compact('data'));

//        $data -> operator_name=Input::get('operator_name');
//        $data -> operator_name=Input::get('operator_email');
    }


    public function update($id)
    {
        $data = Operator::where('operator_id',$id);
        $data->update([
            'operator_name' => request('operator_name'),
            'operator_email' => request('operator_email')
        ]);

        return redirect()->route('adminAccess.index')->with('updateSuccess','Update Successfully!');
    }


    public function delete($id)
    {
        Operator::where('operator_id',$id)->delete();
        return redirect()->route('adminAccess.index')->with('deleteSuccess','Deleted Successfully!');
    }

}
