<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('insert');
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post=new post;
        $post->reg=$request->get('reg');
        $post->fulname=$request->get('fullname');
        $post->seater=$request->get('seater');
        $post->Roomno=$request->get('Roomno');
        $post->email=$request->get('email');
        $post->date=$request->get('date');
        $post->number=$request->get('number');
        $post->gnumber=$request->get('Gnumber');
        $post->addrss=$request->get('address');
        $post->gaddrss=$request->get('Gaddress');

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
        $post->save();
        echo"<h1> Student added into database Seccessfully..</h1>";
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        $posts=post::all();
        return view('dashboard',['posts'=>$posts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post,$id)
    {
       $posts= post::find($id);
       return view('edit',['posts'=>$posts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post,$id)
    {
        $posts=post::find($id);
        $posts->reg=$request->get('reg');
        $posts->fulname=$request->get('fullname');
        $posts->seater=$request->get('seater');
        $posts->Roomno=$request->get('Roomno');
        $posts->email=$request->get('email');
        $posts->date=$request->get('date');
        $posts->number=$request->get('number');
        $posts->gnumber=$request->get('Gnumber');
        $posts->addrss=$request->get('address');
        $posts->gaddrss=$request->get('Gaddress');
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
        $posts->save();
        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post,$id)
    {
        $posts=post::find($id);
        $posts->delete();
        return redirect('dashboard');
    }
}
