<?php

namespace App\Providers;

use App\Data\Car;
use App\Data\Solar;
use App\Data\Truck;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(Car::class, function () {
            return new Car('red');
        });

        $this->app->bindIf(Truck::class, function () {
            return new Truck(app(Solar::class));
        });

        /* App::bind(Car::class, function () { */
        /*     return new Car('blue');             */
        /* }); */

        /* $this->app->instance(Truck::class, new Truck( new Solar )); */
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
