<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\Route;


class PackageRouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->app->booted(function () {
            $this->disablePackageRoutes();
        });


        //  parent::boot();

        // Route::bind('any', function ($value) {
        //     throw new NotFoundHttpException;
        // });

        //
    }

    protected function disablePackageRoutes()
    {





        // Route::prefix('nova')->group(function () {

        //     Route::get('{any}', function () {
        //         return redirect('/abc');
        //     })->where('any', '.*');
        // });



        //
        // $route = Route::current();

        // Retrieve the URL of the current route
        


        // Route::bind('nova', function () {
        //     print_r("nova abbba");

        //     // throw new NotFoundHttpException;
        // });
    }


}
