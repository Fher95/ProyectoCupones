<?php

namespace App\Http\Middleware;

use Closure;

class MDusuarioPublicista
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $usuario_actual=\Auth::user();
        if($usuario_actual->rolPublicista!=1 && $usuario_actual->rolAdministrador!=1){
            dd('No te pases de listo. Area restringida');
        }
        return $next($request);
    }
}
