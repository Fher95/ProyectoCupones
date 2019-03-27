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


Auth::routes();

Route::get('/', function () {
    $cupones = Cupon::where('totalAutorizados','>','0')->get();
    return view('index',['cupones'=>$cupones]);
});
Route::get('/index', 'CuponController@show')->name('index');
Route::get('/tienda', 'HomeController@tienda')->name('tienda');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', 'HomeController@home')->name('home');
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::post('/comprarCupones/{idCupon}', 'CompraController@store')->name('storeCompra');
    Route::get('/visCupon/{idCupon}', [
        'as' => 'visCupon',
        'uses' => 'CuponController@showOne',
    ]);
    Route::get('/cuponComprado',  function () {
        return view('cuponComprado'->with('status', '¡Compra Realizada!'));
    });
    Route::get('/misCupones', 'CompraController@show')->name('showMisCupones');
    Route::get('/redimirCupon/{idCupon}/{fechaCompra}', 'RedimidoController@store')->name('storeRedimido');
});

Route::group(['middleware' => ['usuarioAdmin','usuarioPublicista']], function(){
    Route::get('/crearCupon', 'CuponController@create')->name('crearCupon');
    Route::post('/guardarCupon', 'CuponController@store')->name('storeCupon');
});

Route::group(['middleware' => 'usuarioAdmin'], function(){
    Route::get('/crearAliado', 'AliadoController@create')->name('crearAliado');
    Route::post('/guardarAliado', 'AliadoController@store')->name('storeAliado');
});
