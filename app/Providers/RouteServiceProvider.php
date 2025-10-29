<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        // Chargement des routes principales
        $this->routes(function () {
            // Essai de charger les routes API sans middleware pour debug
            Log::info('RouteServiceProvider: Loading API routes...');
            Route::prefix('api')
                 ->middleware('api')
                 ->namespace($this->namespace)
                 ->group(base_path('routes/api.php'));
            Log::info('RouteServiceProvider: API routes loaded');

            // Charger les routes web minimales pour debug
            Log::info('RouteServiceProvider: Loading minimal web routes...');
            Route::middleware('web')
                 ->namespace($this->namespace)
                 ->group(base_path('routes/web_minimal.php'));
            Log::info('RouteServiceProvider: Minimal web routes loaded');
        });
        
        Log::info('RouteServiceProvider: Boot completed');
    }
}
