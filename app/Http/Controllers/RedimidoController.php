<?php

namespace App\Http\Controllers;

use App\Redimido;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;

class RedimidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $idCupon, $fechaCompra)
    {
        $idUsuario = auth()->user()->id;
        //$cuponARedimir = \App\Compra::where(['idUsuario'=>$idUsuario, 'idCupon'=>$idCupon, 'fechaCompra'=>$fechaCompra]);
        $cuponARedimir = \App\Compra::where(['idUsuario'=>$idUsuario, 'idCupon'=>$idCupon, 'fechaCompra'=>$fechaCompra])->get()[0];

        $cadenaPorHash = sprintf( "%d%d%s", auth()->user()->email, $idCupon, $fechaCompra);        
        $hash = Hash::make($cadenaPorHash);
        $now = new \DateTime();
        
        $redimido = new Redimido();
        $redimido->idUsuario = $idUsuario;
        $redimido->idCupon=$idCupon;
        $redimido->fechaCompra = $fechaCompra;
        $redimido->fechaRedimido = $now;
        $redimido->codigoARedimir = $hash;

        $redimido->save();

        if($cuponARedimir->cantidad>1)
        {
            $data = ['cantidad' => $cuponARedimir->cantidad - 1];
            \App\Compra::where(['idCupon' => $idCupon, 'fechaCompra' => $fechaCompra, 'idUsuario' => $idUsuario])->update($data);
        }
        else{
            $data = [$idCupon,$fechaCompra,$idUsuario];
            \DB::table('compras')
            ->where(['idCupon' => $idCupon, 'fechaCompra' => $fechaCompra, 'idUsuario' => $idUsuario], '=', $data)
            ->delete();
        }
        return view('cuponRedimido')->with('hash', $hash);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Redimido  $redimido
     * @return \Illuminate\Http\Response
     */
    public function show(Redimido $redimido)
    {
        $usuario = auth()->user();
        $redimido = Compra::where('idUsuario',$usuario->id)->get();
        return view('misCupones',['compras'=>$compras]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Redimido  $redimido
     * @return \Illuminate\Http\Response
     */
    public function edit(Redimido $redimido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Redimido  $redimido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Redimido $redimido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Redimido  $redimido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Redimido $redimido)
    {
        //
    }
}
