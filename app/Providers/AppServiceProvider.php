<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\TypeProduct;
use View;
use Illuminate\Support\Facades\DB;

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
        $city_all = DB::table('products')->select('city')->distinct()->get();
        // Sharing is caring
        View::share('category_all', $category_all);
        View::share('city_all', $city_all);
    }
}
