<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class adminController extends Controller
{
    //
    function dashboard(){

        $customers = customer::all();

        return view('admin.dashboard')->with('customers', $customers);
    }
}
