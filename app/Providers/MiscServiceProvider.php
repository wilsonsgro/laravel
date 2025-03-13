<?php

namespace App\Providers;

use App\Services\Geolocation;
use App\Services\Map;
use App\Services\Satellite;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;

class MiscServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            Geolocation::class,
            function(Application $app) {
                $map = $app->make(Map::class);
                $satellite = $app->make(Satellite::class);
                return new Geolocation($map,$satellite);
            });


            $this->app->bind(
                Satellite::class,
                function(Application $app) {
                    return new Satellite();
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
