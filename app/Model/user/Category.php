<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   public function PostByCategory()
    { 
    	return $this->belongsToMany('App\Model\user\Post','category_posts')->where('status',1)->orderBy('created_at','ASC')->paginate(4);
    }

     public function getRouteKeyName()
    {
    	return 'slug';
    }

    public static function GettingTotalCategoryNameOnHeader()
    {
    	$categories = Category::latest()->get();
        return $categories;
    }
}
