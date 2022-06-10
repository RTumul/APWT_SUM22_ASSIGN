<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class customerController extends Controller
{
    //
    function create(){
        return view('customer.create');
    }
    function createSubmit(Request $req){
        $this->validate($req,
        [
            "name" => "required|min:3|max:20|regex:/^[a-zA-Z\s\.-]+$/",
            "email" => "required|regex: /^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/", 
            "gender" => "required",
            "password" => "required|min:8|regex:/^S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/",
            "conf_password" => "required|same:password"

        ],
        [
            "name.min" => "Minimum 3 letters",
            "gender.required" => "Select your gender",
            
        ]
    );

    $cus = new customer;
    $cus -> name = $req->name;
    $cus -> email = $req->email;
    $cus -> gender = $req->gender;
    $cus -> dob = $req->dob;
    $cus -> password = $req -> password;
    $cus -> type = "user";
    $cus -> save();
    return redirect()->route('home');
    }
    
    function dashboard(){
        $customers = customer::all();

        return view('customer.dashboard')->with('customers', $customers);
    }


    
    
}
