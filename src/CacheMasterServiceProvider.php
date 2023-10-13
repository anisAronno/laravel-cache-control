<?php

namespace AnisAronno\LaravelCacheMaster;

use AnisAronno\LaravelCacheMaster\CacheControl;
use Illuminate\Support\ServiceProvider;

class CacheMasterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(CacheControl::class, function () {
            return new CacheControl();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
