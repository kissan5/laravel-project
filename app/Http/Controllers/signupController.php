<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class signupController extends Controller
{
    public function signup()
    {
      return view('frontend.signup');  
    }
    public function register1(Request $request)
    {
        $request->validate(
            [
                'fullname' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm_password' => 'required',
                'number' => 'required',
                'address' => 'required'
                
            ]
            );
        // echo "<pre>";
        // print_r($request->all());
    }
}

