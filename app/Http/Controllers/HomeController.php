<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Post;
use App\Model\user\Youtube;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
    	$posts = Post::where('status',1)->orderBy('created_at','DESC');

     if ($month = request('month')) {  
        $posts->whereMonth('created_at', Carbon::parse($month)->month);
     }
      if ($year = request('year')) {
        $posts->whereYear('created_at', $year);
     }
    
        $posts = $posts->paginate(10);

        
        return view('index',compact('posts'));
    }
}
