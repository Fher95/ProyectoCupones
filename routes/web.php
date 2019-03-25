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
    $cupones = Cupon::where('totalAutorizados','>','0')->get();
    return view('index',['cupones'=>$cupones]);
});

Auth::routes();

Route::get('/index', 'CuponController@show')->name('index');
Route::get('/home', 'HomeController@home')->name('home');

Route::get('/tienda', 'HomeController@tienda')->name('tienda');
Route::get('/crearCupon', 'CuponController@create')->name('crearCupon');
Route::get('/misCupones', 'CompraController@show')->name('showMisCupones');
Route::post('/guardarCupon', 'CuponController@store')->name('storeCupon');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/redimirCupon/{idCupon}/{fechaCompra}', 'RedimidoController@store')->name('storeRedimido');
Route::post('/comprarCupones/{idCupon}', 'CompraController@store')->name('storeCompra');

Route::get('/visCupon/{idCupon}', [
    'as' => 'visCupon',
    'uses' => 'CuponController@showOne',
]);
Route::get('/cuponComprado',  function () {
    return view('cuponComprado'->with('status', '¡Compra Realizada!'));
});

