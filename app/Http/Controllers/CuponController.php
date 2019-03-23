<?php

namespace App\Http\Controllers;

use App\Cupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuario;

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
        $aliado = new AliadoController();
        $aliados = $aliado->devolverAliados();
        return view('crearCupon',['aliados'=>$aliados]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = auth()->user();
        $cupon = new Cupon();
        $cupon->nombreCupon = $request->input('nombreCupon');
        $cupon->categoriaCupon = $request->input('categoriaCupon');
        $cupon->precioCupon = $request->input('precioCupon');
        $cupon->descuentoCupon = $request->input('descuentoCupon');
        $cupon->totalAutorizados = $request->input('totalAutorizados');
        
        $request->validate([
            'URLImagenCupon' => 'required|image',
            'nombreCupon' => 'required',
            'precioCupon' => 'required',
            'descuentoCupon' => 'required',
            'totalAutorizados' => 'required'
        ]);
        $file = $request->file('URLImagenCupon');
        $name = 'img/product-img/' . $usuario->id . time() . $file->getClientOriginalName();
        $file->move(public_path() . '/img/product-img', $name);
        $cupon->URLImagenCupon = $name;
        $cupon->idUsuario = $usuario->id;
        $cupon->idAliado = $request->input('empresaAliada');

        $cupon->save();

        return redirect('/home')->with('status', 'Cupon Creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cupon  $cupon
     * @return \Illuminate\Http\Response
     */
    public function show(Cupon $cupon)
    {
        $cupones = Cupon::all();
        return view('index',['cupones'=>$cupones]);
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
