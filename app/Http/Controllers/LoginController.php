<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
use Session;
use Redirect;


class LoginController extends Controller
{
    public function index(){
  
    return view('login.login');
    
  }

  public function store(Request $request){

     $request->session()->flush();
    
    $pin = $request['pin'];

    $usuario = $request['usuario'];
    $contra = $request['contra'];
    $sentencia2="select * from usuarios where user ='".$usuario. "' and PIN = ".$pin." and contra = '".$contra."';";
    $cantidad = DB::select($sentencia2);
    $tama = count($cantidad);
    if($tama==0){
      $mensaje ="<strong>Warning!</strong>  El usuario no existe <a href=\"login\" class=\"alert-link\">Login </a>";

return view('Error.error',compact('mensaje'));
     }else{

      $request->session()->put('sesionuser', $usuario);
      $request->session()->put('sesionpin', $pin);


      $sentencia = "select nombre from usuarios where user ='".$usuario."';";
      $nombre1 = DB::select($sentencia);
      $nombre =  $nombre1[0]->nombre;  
      $request->session()->put('sesionnombre', $nombre);

      $sentencia = "select idUsuarios from usuarios where user ='".$usuario."';";
      $nombre1 = DB::select($sentencia);
      $nombre =  $nombre1[0]->idUsuarios;  
      $request->session()->put('sesionid', $nombre);

      return Redirect('mostrar');
     }
     

     
  }
}