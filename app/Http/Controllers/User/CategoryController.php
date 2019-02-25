<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Category;

class CategoryController extends Controller
{
    public function PostByCategory(Category $category){ // Post according to category 
    
      $posts = $category->PostByCategory();
      return view('frontend.category.category',compact('posts'));
    }
}
