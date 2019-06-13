<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App\Category;
use App\Observers\CategoryObserver;

use Illuminate\Support\Facades\View;

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

        // Here we will register our Model Observers
        Category::observe(new CategoryObserver);

        // View Composer
        // Always include categories when loading the layouts.app blade file
        View::composer('layouts.app', function ($view) {
            $categories = Category::with('posts')->get();
            $view->with('categories', $categories);
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
