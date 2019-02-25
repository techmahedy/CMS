<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function PostByTag()
    {
    	return $this->belongsToMany('App\Model\user\Post','post_tags')->where('status',1)->orderBy('created_at','ASC')->paginate(4);
    }

     public function getRouteKeyName()
    {
    	return 'slug';
    }
}
