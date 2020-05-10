<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\TypeProduct;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //its just a dummy data object.
        $category_all = TypeProduct::all();

        // Sharing is caring
        View::share('category_all', $category_all);
    }
}
