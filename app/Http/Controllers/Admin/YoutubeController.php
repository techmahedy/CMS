<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Youtube;

class YoutubeController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $videos = Youtube::latest()->get();
        return view('admin.youtube.index',compact('videos'));
    }

    public function create()
    {
        return view('admin.youtube.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [

        'title' => 'required|unique:youtubes',
         'slug' => 'required|unique:youtubes',
         'body' => 'required|unique:youtubes'
        ]);

        $youtubes = new Youtube;
        $youtubes->title = $request->title;
        $youtubes->slug = $request->slug;
        $youtubes->body = $request->body;
        $youtubes->save();
        
        session()->flash('message','Video added successfully');
        return redirect()->back();
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
         $videos = Youtube::find($id);
         return view('admin.youtube.update',compact('videos'));
    }

   
    public function update(Request $request, $id)
    {
        $this->validate($request, [

        'title' => 'required',
         'body' => 'required'
        ]);

        $youtubes = Youtube::find($id);
        $youtubes->title = $request->title;
        $youtubes->body = $request->body;
        $youtubes->save();
        
        session()->flash('message','Video updated successfully');
        return redirect()->back();
    }

   
    public function destroy($id)
    {
        $videos = Youtube::find($id);
        $videos->delete();
        session()->flash('message','Video deleted successfully');
        return redirect()->back();
    }
}
