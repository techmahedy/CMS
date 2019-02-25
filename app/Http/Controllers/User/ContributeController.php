<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Post;
use App\Model\user\Tag;
use App\Model\user\Category;
use App\Model\user\post_tag;
use App\Model\user\category_post;
use Illuminate\Support\Facades\Auth;

class ContributeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::where('user_id' , Auth::user()->id)->get();
        return view('frontend.contribute.index' , compact('posts'));
    }

   
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('frontend.contribute.create',compact('categories','tags'));
    }

    
    public function store(Request $request)
    {
        $this->validate($request,[

        'title' => 'required|unique:posts',
        'meta'  => 'required',
        'slug' => 'required|unique:posts',
        'body' => 'required',
        'image' => 'required'
        ]);

        $posts = new Post;
        
        $posts->image = $request->file('image');
        $image_name = str_random(20);
        $ext = strtolower($posts->image->getClientOriginalExtension());
        $image_full_name = $image_name.'.'.$ext;
        $upload_path = 'image/';
        $image_url = $upload_path.$image_full_name;
        $success = $posts->image->move($upload_path,$image_full_name);
        
        $posts->image = $image_url;

        $posts->title = $request->title;
        $posts->meta = $request->meta;
        $posts->slug = $request->slug;
        $posts->body = $request->body;
        $posts->status = $request->status;
        $posts->posted = $request->posted;
        $posts->user_id = Auth::user()->id;
       

        $posts->save();     

        $posts->PostRelateToCategory()->sync($request->select_category);
        $posts->PostRelateToTag()->sync($request->select_tag);
           
        session()->flash('message','Your Post Submitted successfully');
        return redirect()->back();
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
       $posts = Post::find($id);
       $tags = Tag::all();
       $categories = Category::all();
      
       return view('frontend.contribute.update',compact('posts','tags','categories'));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request,[

        'title' => 'required',
        'meta'  => 'required',     
        'body' => 'required'
        ]);

        $posts = Post::find($id);
        
        $posts->title = $request->title;
        $posts->meta = $request->meta;  
        $posts->body = $request->body;
       
        $posts->PostRelateToCategory()->sync($request->select_category);
        $posts->PostRelateToTag()->sync($request->select_tag);

        $posts->save();     
   
        session()->flash('message','Post updated successfully');
        return redirect()->back();
    }

   
    public function destroy($id)
    {
        $tags = post_tag::where("post_id","=",$id);
        $tags->delete();

        $categories = category_post::where("post_id","=",$id);
        $categories->delete();

        $posts = Post::find($id);
        $posts->delete();
        session()->flash('message','Post deleted successfully');
        return redirect()->back();
    }
}
