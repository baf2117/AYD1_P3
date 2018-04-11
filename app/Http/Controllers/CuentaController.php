<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Mail;
use Session;
use Redirect;


class CuentaController extends Controller
{
    public function index(){
  
    return view('cuenta.agregar');
    
  }

  public function store(Request $request){

  	//$cuenta = rand (10 , 2147483647);
  	$saldo = $request['saldo'];
    $tipo = $request['tipo'];

     $sentencia2="Insert into cuenta (Saldo, Tipo) VALUES ('".$saldo."', '".$tipo."');";
     DB::insert($sentencia2);
     DB::commit();

     
  }
}
