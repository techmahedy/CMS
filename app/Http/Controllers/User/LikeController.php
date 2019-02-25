<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Post;
use App\Model\user\Favourite;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store($id)
    {
        $posts = Post::find($id);
        $store = new Favourite;
        
        $store->title   =  $posts->title;
        $store->slug    =  $posts->slug;    
        $store->image   =  $posts->image;
        $store->user_id =  Auth::user()->id;
        
        $count = Favourite::where('slug' ,  $store->slug)->get()->count();

        if($count == true){
            session()->flash('message','This post is already added to your favourite list');
            return redirect()->back();
        }else{
            $store->save();
            session()->flash('message','This post is added to your favourite list');
            return redirect()->back();

        }
    }

    public function UserFavouritePostList($id){

    	$likeposts = Favourite::where('user_id' , $id)->orderBy('created_at' , 'DESC')->paginate(10);
        return view('frontend.like.favourite' , compact('likeposts'));
    }
}
