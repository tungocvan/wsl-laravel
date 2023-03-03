<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Users\src\Repositories\UsersRepository;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(            
            UsersRepository::class
        ) ;
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
