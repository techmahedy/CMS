<?php

namespace App\Model\user;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function PostRelateToCategory()
    {
    	return $this->belongsToMany('App\Model\user\Category','category_posts')->withTimestamps();
    }

  public function PostRelateToTag()
    {
    	return $this->belongsToMany('App\Model\user\Tag','post_tags')->withTimestamps();
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }

    public static function PopularPostSelectForFooter(){
     $footerPost = Post::where('status', '=', 1)
                         ->orderBy('view_count', 'desc')
                         ->limit(3)
                         ->get();
      
     return $footerPost;
   }

    public static function RandomImagetSelectForSidebar(){
     $posts = Post::where('status', '=', 1)
                         ->orderBy('view_count', 'desc')
                         ->limit(8)
                         ->get();
        return $posts;
   }

   public static function PopularPostSelectForSidebar(){
     $posts = Post::where('status', '=', 1)
                         ->orderBy('view_count', 'desc')
                         ->limit(10)
                         ->get();

           
        return $posts;
   }

   public static function GettingRandomPostForSinglePage()
    {  
        $random = Post::inRandomOrder()->take(4)->get();
        return $random;
        
    }

   public static function GetUserPostNumber(){
           $value = Post::where('status', '=', 0)
                         ->get()->count();
           return $value;
    }


    public static function archives(){
    return static::selectRaw('year(created_at) year , monthname(created_at) month , count(*) published')
                 ->where('status' , 1)
                 ->groupBy('year' , 'month')
                 ->orderByRaw('min(created_at) desc')
                 ->get()->toArray();
   }

}
