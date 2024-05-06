<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function datapage()
    {
      return view('crud.dashboard');  
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
       


    public function show(quary $quary)
       {
           $register=quary::all();
           return view('crud.dashboard',['register'=>$register]);
       }
   
       /**
        * Show the form for editing the specified resource.
        */
       public function edit(post $post,$id)
       {
           $posts=post::find($id);
           return view('edit',['posts'=>$posts]);
   
       }
   
       /**
        * Update the specified resource in storage.
        */
       public function update(Request $request, post $post,$id)
       {
           $posts=post::find($id);
           if(is_null($posts)){
               return view('datapage');
   
           }else{
               $posts->name=$request->get('name');
               $posts->phone=$request->get('phone');
               $posts->email=$request->get('email');
               $posts->address=$request->get('address');
               $posts->message=$request->get('message');
               $request->validate([
                   'name'=>'required',
                   'phone'=>'required',
                   'email'=>'required',
                   'address'=>'required',
                   'message'=>'required'
               ]);
               $posts->save();
               return redirect('datapage');
           }
           
           
          
       }
   
       /**
        * Remove the specified resource from storage.
        */
       public function destroy(post $post,$id)
       {
           $post=post::find($id);
           $post->delete();
           if($post){
               return back()->with('success','Data  Deleted successfuly. Thank You!!');
         
               
          }else{
              return back()->with('fail','Somthing Went Wrong');
     
          }
           
           
           
          return redirect('datapage');
        }
}