<?php

use App\Cupon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    $cupones = Cupon::all();
    return view('index',['cupones'=>$cupones]);
});

Auth::routes();

Route::get('/index', 'CuponController@show')->name('index');
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/crearCupon', 'CuponController@create')->name('crearCupon');
Route::post('/guardarCupon', 'CuponController@store')->name('storeCupon');

