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
    return view('welcome');
});

//Route::resource('Cuenta','CuentaController');

Route::resource('cuenta', 'CuentaController');
Route::resource('usuario', 'UsuarioController');
Route::resource('cuentausuario', 'CuentaUserController');
Route::resource('login', 'loginController');
Route::get('aux', function(){

	return view('login.aux2');
});