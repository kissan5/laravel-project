<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginAllController extends Controller
{
    public function loginAll()
    {
      return view('frontend.loginAll');  
    }
    public function loginpage(Request $request)
    {
        $request->validate(
            [
                
                'email' => 'required|email',
                'password' => 'required|address'
                
            ]
            );
        // echo "<pre>";
        // print_r($request->all());
    }
}



