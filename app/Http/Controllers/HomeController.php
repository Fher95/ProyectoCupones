<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function inicio(){
        $cupones=App\Cupon::all();
        return view('index',compact('cupones'));
    }
    public function principal(){
        return redirect('/');
    }
    public function crearCupon(){
        return view('crearCupon');
    }
}
