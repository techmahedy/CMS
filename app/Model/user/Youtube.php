<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Youtube extends Model
{
   public function getRouteKeyName()
   {
   	 return 'slug';
   }

    public static function PopularYoutubeVideoForHomePageOnly(){
     $youtube = Youtube::latest()->paginate(6);
     return $youtube;
   }

    public static function PopularYoutubeVideoForSidebarPageOnly(){
     $youtube = Youtube::orderBy('created_at', 'asc')
                         ->limit(10)
                         ->get();
     return $youtube;
   }
}
