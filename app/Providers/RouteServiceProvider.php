<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        // creamos un macro aceptando como parametro una accion
        Route::macro('catch', function ($action){
            // aceptamos cualquier cosa
            $this->any('{anything}', $action)
                ->where('anything', '.*')
                ->fallback(); // Si colocamos fallback no importara en que parte coloquemos la macro en la admin.php
        });

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapAdminRoutes();

        $this->mapUserRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    /**
     * Define the "admin" routes for the application.
     *
     * These routes all receive session state, CSRF protection,
     * require authentication and an admin user, etc.
     *
     * @return void
     */
    protected function mapAdminRoutes()
    {
        // autenticamos el codigo dentro e las rutas del admin con el guard "Admin" configurado en "config.auth"
        // ya que por defecto esta para la clase User y no para la clace Admin que creamos.
        Route::middleware(['web', 'auth', 'admin'])
            ->namespace($this->namespace . '\Admin')
            ->prefix('/admin')
            ->group(base_path('routes/Admin/admin.php'));
    }

    protected function mapUserRoutes()
    {
        // autenticamos el codigo dentro e las rutas del admin con el guard "Admin" configurado en "config.auth"
        // ya que por defecto esta para la clase User y no para la clace Admin que creamos.
        Route::middleware(['web', 'auth'])
            ->namespace($this->namespace . '\User')
            ->prefix('/user')
            ->group(base_path('routes/User/user.php'));
    }
}
