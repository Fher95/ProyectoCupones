<?php

namespace App\Http\Controllers;

use App\Cupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CuponController extends Controller
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
    public function store(Request $request)
    {
        $cupon = new Cupon();
        $cupon->nombreCupon = $request->input('nombreCupon');
        $cupon->URLImagenCupon = $request->input('URLImagenCupon');
        $cupon->categoriaCupon = $request->input('categoriaCupon');
        $cupon->precioCupon = $request->input('precioCupon');
        $cupon->descuentoCupon = $request->input('descuentoCupon');
        $cupon->totalAutorizados = $request->input('totalAutorizados');
        $cupon->idUsuario = $request->input('idUsuario');
        $cupon->idAliado = $request->input('idAliado');
        $cupon->save();
        
        return 'Saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cupon  $cupon
     * @return \Illuminate\Http\Response
     */
    public function show(Cupon $cupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cupon  $cupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Cupon $cupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cupon  $cupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cupon $cupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cupon  $cupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cupon $cupon)
    {
        //
    }
}
