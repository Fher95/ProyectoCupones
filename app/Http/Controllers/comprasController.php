<?php

namespace App\Http\Controllers;

use App\Compra;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class comprasController extends Controller
{
    public function index()
    {
        $emailUsuario = auth()->user()->email;
        //DD($emailUsuario);
        $compras = \DB::table('compras')
        ->join('cupones', 'cupones.idCupon', '=', 'compras.idCupon')
        ->join('usuarios', 'usuarios.id', '=', 'compras.idUsuario')
        ->select('compras.idUsuario','email','nombreCupon', 'urlimagencupon', 'cantidad','preciocupon','descuentocupon')
        ->where('email', '=', $emailUsuario)
        ->get();
        return view('misCupones', compact('compras'));
    }
}
