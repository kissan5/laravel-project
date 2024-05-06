<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    return view('frontend.index');
  }
  public function contactus(Request $request)
  {
    $request->validate([

      'fullname' => 'required',
      'email' => 'required|email',
      'number' => 'required',
      'address' => 'required',
      'comments' => 'required'

    ]);
    // echo "<pre>";
    // print_r($request->all());
  }
}
