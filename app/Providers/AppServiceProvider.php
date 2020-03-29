<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(\App\Repositories\Account\User\UserInterface::class, \App\Repositories\Account\User\UserRepository::class);

        $this->app->bind(\App\Repositories\Account\Experience\ExperienceInterface::class, \App\Repositories\Account\Experience\ExperienceRepository::class);
        
        $this->app->bind(\App\Repositories\Auth\AuthInterface::class, \App\Repositories\Auth\AuthRepository::class);
    }

    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
