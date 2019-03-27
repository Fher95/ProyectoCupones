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
        if($usuario_actual->rolPublicista == 1){
            return $next($request);
        }
        else if($usuario_actual->rolAdministrador == 1){
            return $next($request);
        }
        abort(403, 'Por poco hackeas nuestros servidores, no te pases de listo, sabemos tu IP.');
    }
}
