<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
use Session;
use Redirect;

class MostrarController extends Controller
{
      public function index(){
     $value = Session::get('sesionid');

	 $sentencia2="Select id_cuenta from usuario_cuenta where id_usuario =".$value.";";
     $cuentas = DB::Select($sentencia2);
 
    return view('cuenta.mostrar',compact('cuentas'));
    
  }

public function store(Request $request){

   $nocuenta = $request['cuenta'];
   $request->session()->put('sesionnoc', $nocuenta);
   return Redirect('transferencias');

  }
}
