<?php

namespace App\Providers;

use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use App\Http\Controllers\CategoryController;
use App\Models\Category;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        Facades\View::composer('menu', function ($view){

            $cats=Category::with([
                'subcategories',
            ])->get();


              $view->with('categories',$cats);

       });



    }
}
