<?php

namespace App\Http\Middleware;

use Closure;

class MDusuarioadmin
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
        if($usuario_actual->rolAdministrador!=1){
            return view("mensajes.msj_rechazado")->with("msj","No tiene permisos");
        }
        return $next($request);
    }
}
