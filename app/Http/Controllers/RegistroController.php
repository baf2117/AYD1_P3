<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Mail;
use Session;
use Redirect;

class RegistroController extends Controller
{
        public function index(){
  
    return view('login.registro');
    
  }

   public function store(Request $request){

     $request->session()->flush();
    
    $correo = $request['correo'];
    $usuario = $request['usuario'];
    $contra = $request['contra'];
    $nombre = $request['nombre'];



    $sentencia2="select * from usuarios where nombre ='".$nombre. "';";
    $cantidad = DB::select($sentencia2);
    $tama = count($cantidad);
    if($tama==0){
      $mensaje ="<strong>Error!</strong>  No cuenta con un usuario activo, dirigase a la agencia mas cercana para disfrutar de todos nuestros beneficios<a href=\"login\" class=\"alert-link\">Login </a>";

		return view('Error.error',compact('mensaje'));
     }else{

    $sentencia2="select * from usuarios where user ='".$usuario. "';";
    $cantidad = DB::select($sentencia2);
    $tama = count($cantidad);

    if($tama>0){
      $mensaje ="<strong>Error!</strong> El usuario no está disponible, porfavor eliga otro <a href=\"registro\" class=\"alert-link\">Registro </a>";

		return view('Error.error',compact('mensaje'));
     }

      $pin = rand(100,9999);
      $request->session()->put('sesionuser', $usuario);
      $request->session()->put('sesionpin', $pin);
      $request->session()->put('sesionnombre', $nombre);

      $sentencia = "select idUsuarios from usuarios where nombre ='".$nombre."';";
      $nombre1 = DB::select($sentencia);
      $id =  $nombre1[0]->idUsuarios;  
      $request->session()->put('sesionid', $id);

     $mensaje ="<strong>Atencion</strong> su pin de seguridad es ".$pin." <a href=\"mostrar\" class=\"alert-link\">avanzar </a>";
     
    $sentencia = "update usuarios SET user = '".$usuario."', correo = '".$correo."', contra = '".$contra."', PIN = ".$pin." WHERE idUsuarios = ".$id.";";
    DB::update($sentencia);
    DB::commit();


		return view('Error.error',compact('mensaje'));
     }
     

     
  }
}