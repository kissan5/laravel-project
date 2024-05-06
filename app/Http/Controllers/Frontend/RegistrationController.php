<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function Registration()
    {
      return view('frontend.Registration');  
    }
    public function register(Request $request)
    {
        $request->validate([
                'reg' => 'required',
                'fullname' => 'required',
                'seater' => 'required',
                'Roomno' => 'required',
                'email' => 'required|email',
                'date' => 'required',
                'number' => 'required',
                'Gnumber' => 'required',
                'address' => 'required',
                'Gaddress' => 'required'
                
            ]);
// dd($request->all());
            $quary = DB::table('register')->insert([
                'reg'=>$request->input('reg'),
                'fullname'=>$request->input('fullname'),
                'seater'=>$request->input('seater'),
                'roomno'=>$request->input('Roomno'),
                'email'=>$request->input('email'),
                'date'=>$request->input('date'),
                'number'=>$request->input('number'),
                'gnumber'=>$request->input('Gnumber'),
                'address'=>$request->input('address'),
                'gaddress'=>$request->input('Gaddress')

            ]);
            if($quary){
                 return back()->with('success','Data successfuly inserted Thank You for Contacting US!!');
           
                 
            }else{
                return back()->with('fail','Somthing Went Wrong');
            }
        
       }
     
   
       /**
        * Remove the specified resource from storage.
        */
    //    public function destroy(quary $quary,$id)
    //    {
    //        $register=quary::find($id);
    //        $post->delete();
    //        if($post){
    //            return back()->with('success','Data  Deleted successfuly. Thank You!!');
         
               
    //       }else{
    //           return back()->with('fail','Somthing Went Wrong');
     
    //       }
           
           
           
    //       return redirect('datapage');
    //     }
   }


