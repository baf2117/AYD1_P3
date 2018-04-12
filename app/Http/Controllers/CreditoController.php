<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;

class CreditoController extends Controller
{
      public function index(){

	 $sentencia2="Select idCuenta from cuenta";
     $cuentas = DB::Select($sentencia2);
 
    return view('usuario.credito',compact('cuentas'));
    
  }

  public function store(Request $request){

 	$cuenta = $request['cuenta'];
 	$monto = $request['monto'];
 	$actual = Session::get('sesionnoc');
 	$descripcion = $request['des'];
  $id = Session::get('sesionid');

     $sentencia2="Select saldo from cuenta where idCuenta = ".$actual.";";
     $saldo = DB::select($sentencia2);
     $saldo = $saldo[0]->saldo;

     if($saldo>=$monto){
      $valor = $saldo - $monto;
      $sentencia2="update cuenta set Saldo =".$valor."  WHERE idCuenta =".$actual.";";
      DB::update($sentencia2);
      DB::commit();

     $sentencia2="Select saldo from cuenta where idCuenta = ".$cuenta.";";
     $saldo = DB::select($sentencia2);
     $saldo = $saldo[0]->saldo;
     $valor = $saldo + $monto;
     $sentencia2="update cuenta set Saldo =".$valor."  WHERE idCuenta =".$cuenta.";";
     DB::update($sentencia2);
     DB::commit();

     $sentencia2 = "Insert into transferencias (cuenta_Re, cuenta_En, Monto, Fecha, Tipo, id_usuario, descripcion) VALUES (".$cuenta.", ".$actual.", ".$monto.", SYSDATE(), 'CREDITO', ".$id.", '".$descripcion."');";
      DB::insert($sentencia2);
     DB::commit();
     
     return Redirect('credito');

     }else{
  $mensaje ="<strong>Warning!</strong> No se cuenta con el saldo suficiente para realizar la transaccion <a href=\"credito\" class=\"alert-link\">Regresar </a>";

return view('Error.error',compact('mensaje'));

     }

}
}
