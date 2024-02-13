<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if(env(key:'APP_ENV') !== 'local') {
            URL::forcescheme(scheme: 'https');
        }
    }
}
