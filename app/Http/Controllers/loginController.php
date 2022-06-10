<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class loginController extends Controller
{
    //
    function login(){
        return view('customer.login');
    }

    function loginAuth(Request $req){
         $req->validate(
           [
               "email" => "required",
               "password" => "required"
           ]
        );
        $cus = customer::where('email', '=',$req -> email)->first();
        if($cus){
              if($req->password == $cus->password){
                if($cus -> type == 'admin'){
                return redirect()->route('admin.dashboard');
            }
            else{
                return redirect()->route('customer.dashboard');
            }

              }
              else{
                  return "Wrong password";
              }
        }
        else{
            return "Email doesn't exist";
        }
    }

    
}
