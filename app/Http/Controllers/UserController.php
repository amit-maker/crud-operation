<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $author= author::all();
        $data= compact('author');
        return view('home')->with($data);
    }

    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

  


        $author=new author;
        $author->blogname=$request->blogname;
        $author->title=$request->title;
        $author->description=$request->description;
        $author->image=$image=$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images/',$image);
              
     
        $author->date=$request->date;
        $author->summary=$request->summary;
        $author->authorname=$request->authorname;

        // $author->status=$request->status;

        $author->save();
        return redirect()->back()->with('message','User Added Successfully !');
    }

    // public function updateStatus(Request $request)
    // {
    //     $author = author::find($request->author_id); 
    //     $author->status = $request->status; 
    //     $author->save(); 
    //     return response()->json(['success'=>'Status change successfully.']); 
    // }

    
    public function show($id)
    {

        
        $author = Author::where('id','=', $id)->first();
        return view('show',compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
       $author = author::where('id', '=',$id )->first();
       return view('edit',compact('author'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;
        $blogname=$request->blogname;
        $title=$request->title;
        $description=$request->description;

        $image=$request->file('image')->getClientOriginalName();
        $request->file('image')->store('public/images/');

        // $imageName = time().'.'.$request->image->extension();      
        // $request->image->move(public_path('images'), $imageName);
        

        $date=$request->date;
        $summary=$request->summary;
        $authorname=$request->authorname;
        // $status=$request->status;

        author::where('id','=',$id)->update([
            'blogname'=>$blogname,
            'title'=>$title,
            'description'=>$description,
            'image'=>$image,
            'date'=>$date,
            'summary'=>$summary,
            'authorname'=>$authorname,
            // 'status'=>$status
        ]);

        return redirect()->back()->with('message','User Updated Successfully !');
    }

    /**
     * Remove the specified resource f  rom storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author= author::find($id);
        $author->delete();
        return redirect('/');
    }
}
