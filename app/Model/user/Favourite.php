<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    public static function GetUserFavouritePost(){
           $count = Favourite::get()->count() ;
           return $count;
    }
}
