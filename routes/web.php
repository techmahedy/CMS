<?php

/********* Admin Route Section ********/

/*************** Backend Routes **********/
Route::group(['namespace' => 'Admin'] , function(){
  
  Route::get('/backend','HomeController@ShowHomePage');

  Route::resource('backend/category','CategoryController');
  Route::resource('backend/tag','TagController');
  Route::resource('backend/post','PostController');
  Route::resource('backend/admin','AdminController');
  Route::resource('backend/settings','SettingsController');
  Route::resource('backend/profile','ProfileController');
  Route::resource('backend/youtube','YoutubeController');
  Route::resource('backend/email','EmailController');

  /****Admin Login Route*****/
  Route::get('backend/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
  Route::post('backend/login', 'Auth\LoginController@login');
  Route::post('backend/logout', 'Auth\LoginController@logout')->name('logout');

});

/********* Fronetend Route Section ********/

/*************** Frontend Routes **********/
Route::group(['namespace' => 'User'] , function(){;
  
  Route::get('/youtube/{youtube?}','SingleYoutubeVideoController@youtube')->name('youtube');
  Route::get('/post/{post?}','PostController@GettingSinglePostData')->name('post');

  Route::get('/post/category/{category?}','CategoryController@PostByCategory')->name('category');
  Route::get('/post/tag/{tag?}','TagController@TotalPostByTag')->name('tag');
  Route::resource('contact','ContactController');

  Route::resource('subscribe','SubscriberController');
  Route::resource('contribute','ContributeController');
  Route::resource('youtube-video','VideoController');
  
  Route::post('/favourite/post/{post}','LikeController@store');
  Route::get('/favourite/postlist/{post}','LikeController@UserFavouritePostList');
  
 // Search Query Section
  Route::get('/search','SearchController@searchQuery');
});


 Auth::routes();
 Route::get('/','HomeController@index');

 // Login With Socialite
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
