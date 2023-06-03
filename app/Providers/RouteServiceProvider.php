<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/dashboard';
    protected $namespace = 'App\\Http\\Controllers';
    
    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
      $this->mapApiRoutes();
      $this->mapWebRoutes();
    }
    protected function mapApiRoutes()
    {
       
            Route::middleware('api')
                ->prefix('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

        
    }
    protected function mapWebRoutes()
    {
       

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
    
    }
}
