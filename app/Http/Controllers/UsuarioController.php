<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
use Session;
use Redirect;

class UsuarioController extends Controller
{
      public function index(){
  
    return view('usuario.agregar');
    
  }

  public function store(Request $request){

  	$nombre = $request['nombre'];
    $usuario = $request['usuario'];

     $sentencia2="INSERT INTO usuarios (user, Nombre,Correo, contra,PIN) VALUES ('".$usuario."', '".$nombre."', NULL, NULL, NULL);";
     DB::insert($sentencia2);
     DB::commit();
     DB::commit();
    
}
}
