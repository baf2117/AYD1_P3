<?php


Route::get('/', function () {
    return view('layouts.presentacion');
});

//Route::resource('Cuenta','CuentaController');

Route::resource('cuenta', 'CuentaController');
Route::resource('usuario', 'UsuarioController');
Route::resource('cuentausuario', 'CuentaUserController');
Route::resource('login', 'loginController');
Route::resource('transferencias', 'TransferenciasController');
Route::resource('mostrar', 'MostrarController');
Route::resource('credito', 'CreditoController');
Route::resource('debito', 'DebitoController');
Route::resource('saldo', 'SaldoController');
Route::resource('registro', 'RegistroController');
Route::get('aux', function(){

	return view('login.aux2');
});