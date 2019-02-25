<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Tag;

class TagController extends Controller
{
    public function TotalPostByTag(Tag $tag){ // Post according to category 
    
      $posts = $tag->PostByTag();
      return view('frontend.tag.tag',compact('posts'));
    }
}
