<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Subscriber;
use App\Model\user\Post;
use App\Model\user\User;
use App\Model\user\Favourite;
class HomeController extends Controller
{  

     public function __construct()
    {
        $this->middleware('auth:admin');
    }

   public function ShowHomePage()
   {    
   	    $SubscriberCounter = Subscriber::get()->count();
   	    $CounterPost = Post::get()->count();
   	    $CounterUser = Post::get()->count();
   	    $subscriber = Subscriber::latest()->get();
        $star = Favourite::GetUserFavouritePost();
        return view('admin.home' , compact('subscriber' , 'SubscriberCounter' , 'CounterPost' , 'CounterUser','star'));

   }
}
