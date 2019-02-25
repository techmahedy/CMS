<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Youtube;

class SingleYoutubeVideoController extends Controller
{
    public function youtube(Youtube $youtube)
    {   
    	return view('frontend.youtube.youtube' , compact('youtube'));
    }
}
