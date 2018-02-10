<?php

namespace App\Providers;
use App\Billing\Stripe;
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
        //
//        view()->composer('layouts.sideTab',function($view){
//            //$view->with('archives',\App\Post::archives());
//            $view->with('theatres',\App\Theatre::pluck('name'));
//        });
//        view()->composer('theatres.show',function($view){
//            //$view->with('archives',\App\Post::archives());
//            $view->with('theatres',\App\Theatre::pluck('name'));
//        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

        $this->app->singleton(Stripe::class,function(){
            return new Stripe(config('services.stripe.secret'));
        });

    }
}
