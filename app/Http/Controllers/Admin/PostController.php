<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Post;
use App\Model\user\Tag;
use App\Model\user\Category;
use App\Model\user\post_tag;
use App\Model\user\category_post;
use App\Notifications\NewPostNotify;
use Illuminate\Support\Facades\Notification;
use App\Model\user\Subscriber;
use Illuminate\Notifications\Notifiable;

class PostController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.post.index' , compact('posts'));
    }

   
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.create',compact('categories','tags'));
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
       

        $posts->save();     

        $posts->PostRelateToCategory()->sync($request->select_category);
        $posts->PostRelateToTag()->sync($request->select_tag);
        
        $subscribers = Subscriber::all();
      
        foreach($subscribers as $subscriber){
            Notification::route('mail' , $subscriber->email)
                          ->notify(new NewPostNotify($posts));

        session()->flash('message','Mail has been sent to subscriber');
        return redirect()->back();
      }

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
      
       return view('admin.post.update',compact('posts','tags','categories'));
    }

   
    public function update(Request $request, $id)
    {
         $this->validate($request,[

        'title' => 'required',
        'meta'  => 'required',     
        'body' => 'required',
        'image' => 'required'
        ]);

        $posts = Post::find($id);
        
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
        $posts->body = $request->body;
        $posts->status = $request->status;
        $posts->posted = $request->posted;
        
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
        session()->flash('message','Product deleted successfully');
        return redirect()->back();
    }
}
