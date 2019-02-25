<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Post;
Use Session;

class PostController extends Controller
{
    public function GettingSinglePostData(Post $post)
    {  
       $key = 'myblog'.$post->id; 
		if (!Session::has($key)) {
	       $post->increment('view_count');
	       Session::put($key , 1);
		}
		return view('frontend.post.single',compact('post'));
		
    }
    
}
