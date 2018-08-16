<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;

use Session;


class SaldoController extends Controller

{
	public function index(){
     $cuenta = Session::get('sesionnoc');
	 $sentencia2="Select saldo from cuenta where idCuenta = ".$cuenta.";";
     $saldo = DB::select($sentencia2);
     $saldo = $saldo[0]->saldo;
    return view('usuario.saldo',compact('saldo'));
}

}