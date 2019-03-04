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
        $usuario_actual=\Auth::usuario();
        if($usuario_actual->rolPublicista!=1){
            return view("mensajes.msj_rechazado")->with("msj","No tiene permisos de publicista");
        }
        return $next($request);
    }
}
