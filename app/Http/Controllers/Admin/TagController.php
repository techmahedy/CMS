<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Tag;

class TagController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
       $tags = Tag::latest()->get();
       return view('admin.tag.index',compact('tags'));
    }

 
    public function create()
    {
        return view('admin.tag.create');
    }

  
    public function store(Request $request)
    {
        $this->validate($request, [

        'tag_name' => 'required|unique:tags',
         'slug' => 'required|unique:tags'

        ]);
        $tags = new Tag;
        $tags->tag_name = $request->tag_name;
        $tags->slug = $request->slug;
        $tags->status = $request->status;
        $tags->save();
        
        session()->flash('message','Tag added successfully');
        return redirect()->back();
    }

  
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $tags = Tag::find($id);
        return view('admin.tag.update',compact('tags'));
    }

   
    public function update(Request $request, $id)
    {
        $this->validate($request, [

        'tag_name' => 'required'
        ]);
        $tags = Tag::find($id);
        $tags->tag_name = $request->tag_name;
        $tags->status = $request->status;
        $tags->save();
        session()->flash('message','Tag updated successfully');
        return redirect()->back();
    }

   
    public function destroy($id)
    {
       $tags = Tag::find($id);
       $tags->delete();
       return redirect()->back();
    }
}
