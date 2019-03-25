<?php

namespace App\Http\Controllers;

use App\Compra;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompraController extends Controller
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
    public function store(Request $request, $idCupon)
    {
        $usuario = auth()->user();
        $idUser = $usuario->id;
        $compra = new Compra();
        $compra->idUsuario = $idUser;
        $compra->idCupon = $idCupon;
        $now = new \DateTime();
        $compra->fechaCompra = $now;
        $compra->cantidad = $request->cantidadCompra;
        
        $compra->save();    

        $cupon = \App\Cupon::find($idCupon);
        $numActual = $cupon->totalAutorizados;
        $cupon->totalAutorizados = $numActual - $request->cantidadCompra;
        $cupon->save();

        return redirect('/home')->with('status', '¡Compra Realizada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function show(Compra $compra)
    {
        $usuario = auth()->user();
        $compras = Compra::where('idUsuario',$usuario->id)->get();
        return view('misCupones',['compras'=>$compras]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function edit(Compra $compra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function update(request $request,Compra $compra)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compra $compra)
    {
        //
    }
}
