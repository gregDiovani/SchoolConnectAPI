<?php

namespace App\Providers;

use App\Services\RepositoryService;
use App\Services\ServiceLogin;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
         $this->app->bind("myhelper", function($app){

             return new ServiceLogin(new RepositoryService("mysql"));

         });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
