<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;

class CuentaUserController extends Controller
{      public function index(){

	 $sentencia2="Select idUsuarios,nombre from usuarios";
     $usuarios = DB::Select($sentencia2);
     $sentencia2="Select idCuenta from cuenta";
     $cuentas = DB::Select($sentencia2);
     
  
    return view('cuentauser.agregar',compact('usuarios','cuentas'));
    
  }

  public function store(Request $request){

  	$nombre = $request['cuenta'];
    $usuario = $request['usuario'];

     $sentencia2="INSERT INTO usuario_cuenta (id_usuario, id_cuenta) VALUES ('".$usuario."', '".$nombre."');";
     DB::insert($sentencia2);
     DB::commit();
    
}
}
