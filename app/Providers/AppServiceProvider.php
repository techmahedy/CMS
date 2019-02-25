<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
      // Footer post 
        view()->composer('frontend.layout.footer' , function($view){
            $view->with('footerPost',\App\Model\user\Post::PopularPostSelectForFooter());
        });
     // Footer flickr image
         view()->composer('frontend.layout.footer' , function($view){
            $view->with('posts',\App\Model\user\Post::RandomImagetSelectForSidebar());
        });
      // Sidebar Post 
          view()->composer('frontend.layout.sidebar' , function($view){
            $view->with('popular',\App\Model\user\Post::PopularPostSelectForSidebar());
        });

     // Youtube Post Homepage
          view()->composer('frontend.layout.home' , function($view){
            $view->with('youtube',\App\Model\user\Youtube::PopularYoutubeVideoForHomePageOnly());
        });

          // Youtube Post Sidebar
          view()->composer('frontend.layout.sidebar' , function($view){
            $view->with('youtube',\App\Model\user\Youtube::PopularYoutubeVideoForSidebarPageOnly());
        });

           // Youtube Post Sidebar
          view()->composer('frontend.layout.header' , function($view){
            $view->with('categories',\App\Model\user\Category::GettingTotalCategoryNameOnHeader());
        });

             // Random Post Single Page 
          view()->composer('frontend.layout.related' , function($view){
            $view->with('random',\App\Model\user\Post::GettingRandomPostForSinglePage());
        });

           // Random Post Single Page 
          view()->composer('admin.layout.header' , function($view){
            $view->with('text',\App\Model\user\Contact::GetUserMessageFromContactField());
        });

            view()->composer('admin.layout.header' , function($view){
            $view->with('count',\App\Model\user\Contact::GetUserMessageNumber());
        });

             view()->composer('admin.layout.header' , function($view){
            $view->with('value',\App\Model\user\Post::GetUserPostNumber());
        });

          view()->composer('frontend.layout.sidebar' , function($view){
            $view->with('archives',\App\Model\user\Post::archives());
        });    
    
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
