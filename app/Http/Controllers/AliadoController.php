<?php

namespace App\Http\Controllers;

use App\Aliado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AliadoController extends Controller
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
        //return view('')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aliado = new Aliado();
        $aliado->nombreAliado = $request->input('nombreAliado');
        $aliado->telefonoAliado = $request->input('telefonoAliado');
        $aliado->direccionAliado = $request->input('direccionAliado');
        $aliado->idUsuario = $request->input('idUsuario');
        $aliado->save();

        return 'Saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aliado  $aliado
     * @return \Illuminate\Http\Response
     */
    public function show(Aliado $aliado)
    {
        $aliados = Aliado::all();
        return view('crearCupon',['aliados'=>$aliados]);
    }

    public function devolverAliados()
    {
        return Aliado::all();
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aliado  $aliado
     * @return \Illuminate\Http\Response
     */
    public function edit(Aliado $aliado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aliado  $aliado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aliado $aliado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aliado  $aliado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aliado $aliado)
    {
        //
    }
}
