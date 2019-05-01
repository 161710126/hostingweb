<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
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
         view()->composer('blog.side', function ($view) {
            $kategori = \App\Kategori::all();
            // $category = \App\Category::all();
            $recent = \App\Artikel::orderBy('created_at', 'desc')->take(4)->get();
            $view->with(compact('kategori', 'recent'));
        });  
         view()->composer('frontend.event-show', function ($view) {
            // $kategori = \App\Kategori::all();
            // $category = \App\Category::all();
            $recentt = \App\Event::orderBy('created_at', 'desc')->take(4)->get();
            $view->with(compact('kategori', 'recentt'));
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
