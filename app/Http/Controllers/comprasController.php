<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Cupon;
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
        $now = new \DateTime();
        if($cantidad>1){
            $data = ['cantidad' => $cantidad - 1];
            Compra::where(['idCupon' => $idCupon, 'fechaCompra' => $fechaCompra, 'cantidad' => $cantidad])->update($data);
        }
        else{
            $data = [$idCupon,$fechaCompra,$cantidad];
            \DB::table('compras')
            ->where(['idCupon' => $idCupon, 'fechaCompra' => $fechaCompra, 'cantidad' => $cantidad], '=', $data)
            ->delete();
        }
        \DB::table('redimidos')->insert(
            ['idUsuario' => auth()->user()->id, 'idCupon' => $idCupon, 'fechaCompra' => $fechaCompra, 'fechaRedimido' => $now, 'codigoARedimir' => $hash]
        );
        return view('cuponRedimido')->with('hash', $hash);
    }
    public function guardarCompra($idCupon,$cantidadCompra){
        $usuario = auth()->user();        
        $compra = new Compra();        
        $compra->idUsuario = $usuario->id;        
        $compra->idCupon = $idCupon;
        $now = new \DateTime();
        $compra->fechaCompra = $now;
        $compra->cantidad = $cantidadCompra;
        $compra->save();
        $cupon = Cupon::find($idCupon);
        $numActual = $cupon->totalAutorizados;
        $cupon->totalAutorizados = $numActual - $cantidadCompra;
        $cupon->save();
        return view('cuponComprado')->with('status', '¡Compra Realizada!');
    }
    public function store(Request $request)
    {
        $usuario = auth()->user();        
        $compra = new Compra();
        $cantidadCompra = $request->input('cantidad');
        $compra->idUsuario = $usuario->id;        
        $compra->idCupon = $request->input('idCupon');
        $now = new \DateTime();
        $compra->fechaCompra = $now;
        $compra->cantidad = $cantidadCompra;
        $compra->save();
        $cupon = Cupon()::find($request->input('idCupon'));
        $numActual = $cupon->totalAutorizados;
        $cupon->totalAutorizados = $numActual - $cantidadCompra;
        $cupon->save();        

        return redirect('/home')->with('status', '¡Compra Realizada!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cupon  $cupon
     * @return \Illuminate\Http\Response
     */
    public function destroy($cantidad, $idCupon, $fechaCompra)
    {

    }
}
