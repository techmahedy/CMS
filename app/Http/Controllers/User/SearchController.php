<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Model\user\Post;

class SearchController extends Controller
{
    public function searchQuery()
    {
    	$q = Input::get('q');
    	if ($q != " ") {
    	  $posts = Post::where('title' , 'LIKE' , '%' .$q . '%')
    	                 ->orWhere('body' , 'LIKE' , '%' .$q . '%') 
    	                 ->paginate(4);
    	             
    	      return view('frontend.search.search',compact('posts'));
    	              
    	 }
    }
}
