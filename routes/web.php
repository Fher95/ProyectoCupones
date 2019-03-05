<?php

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
    return redirect('/index') ;
});

Route::get('/welcome',function(){
    return view('welcome');
});
Auth::routes();

//Route::get('/principal', 'HomeController@principal')->name('principal');
Route::get('/index', 'HomeController@inicio')->name('index');
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/crearCupon', 'HomeController@crearCupon')->name('crearCupon');
Route::post('/guardarCupon', 'CuponController@store')->name('storeCupon');

