<?php

namespace App\Providers;

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
        // binds interface to repository
        foreach ([
                     "Property" => ["Property"],
                     "AnalyticType" => ["AnalyticType"],
                     "PropertyAnalytic" => ["PropertyAnalytic"],
                 ] as $_dir => $_names) {
            foreach ($_names as $_eachName) {
                $this->app->bind(
                    "App\Repositories\\" . $_dir . "\\" . $_eachName . "Interface",
                    "App\Repositories\\" . $_dir . "\\" . $_eachName . "Repository"
                );
                $this->app->alias("App\Repositories\\" . $_dir . "\\" . $_eachName . "Interface", $_eachName);
            }

        }
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
