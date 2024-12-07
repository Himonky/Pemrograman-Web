<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
    // app/Providers/RouteServiceProvider.php

public function map()
{
    $this->mapWebRoutes();
    $this->mapApiRoutes();  // Pastikan baris ini ada

    //
}

protected function mapApiRoutes()
{
    Route::prefix('api')  // Prefix url untuk API adalah /api
         ->middleware('api')  // Middleware untuk API
         ->namespace($this->namespace)  // Menjaga namespace yang sama dengan controller
         ->group(base_path('routes/api.php'));  // Pastikan ini mengarah ke file api.php
}

}
