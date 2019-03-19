<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

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
    public function index(){
        return view('index');
    }
    public function home(){
        return view('home');
    }
    public function tienda(){
        return view('tienda');
    }
    public function misCupones(){
        return view('misCupones');
    }

    /*public function inicio(){
        $cupones = App\Cupon::all();
        return view('index',compact('cupones'));
    }*/
}
