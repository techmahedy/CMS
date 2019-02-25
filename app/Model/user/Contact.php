<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public static function GetUserMessageFromContactField(){
           $text = Contact::latest()->get();
           $count = Contact::get()->count() ;
           return $text;
    }

    public static function GetUserMessageNumber(){
           $count = Contact::get()->count() ;
           return $count;
    }
}
