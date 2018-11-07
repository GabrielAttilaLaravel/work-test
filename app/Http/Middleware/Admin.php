<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     * @throws AuthorizationException
     */
    public function handle($request, Closure $next)
    {
        // verificamos si el usuario no es un administrador
        if (! optional($request->user())->isAdmin()){
            // lanzamos una excepción de autorizacion
            throw new AuthorizationException;
        }
        // de lo contrario dejamos que el sistema siga su curso normal

        return $next($request);
    }
}
