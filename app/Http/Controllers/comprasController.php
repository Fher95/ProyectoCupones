<?php

namespace App\Http\Controllers;

use App\Compra;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;

class comprasController extends Controller
{
    public function index()
    {
        $emailUsuario = auth()->user()->email;
        //DD($emailUsuario);
        $compras = \DB::table('compras')
        ->join('cupones', 'cupones.idCupon', '=', 'compras.idCupon')
        ->join('usuarios', 'usuarios.id', '=', 'compras.idUsuario')
        ->select('compras.idUsuario','email','nombreCupon', 'cupones.idCupon' ,'fechaCompra' ,'urlimagencupon', 'cantidad','preciocupon','descuentocupon')
        ->where('email', '=', $emailUsuario)
        ->get();
        return view('misCupones', compact('compras'));
    }
    
    public function generarPagina($fechaCompra, $idCupon, $cantidad){
        $cadenaPorHash = sprintf( "%d%d%s", auth()->user()->email, $idCupon, $fechaCompra);        
        $hash = Hash::make($cadenaPorHash);
        //Compra::destroy($cantidad, $idCupon, $fechaCompra);
        return view('cuponRedimido')->with('hash', $hash);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cupon  $cupon
     * @return \Illuminate\Http\Response
     */
    public function destroy($cantidad, $idCupon, $fechaCompra)
    {
        if($cantidad > 1){
            dd("cantidad mayor a 1");
        }
        else{
            dd("cantidad menor a 1");
        }
    }
}
