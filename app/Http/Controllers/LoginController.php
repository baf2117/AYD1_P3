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

  	
  	$pin = $request['pin'];
    $usuario = $request['usuario'];
    $contra = $request['contra'];
     $sentencia2="select count(*) from usuarios where user ='".$usuario. "' and PIN = ".$pin." and contra = '".$contra."';";
     $cantidad = DB::select($sentencia2);

     if($cantidad==0){

return "<html lang=\"en\">
<head>

  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <style type=\"text/css\">
  #bg {
  position: fixed;
  z-index: -1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
     }
  </style>
</head>
<body>

<div class=\"container\">
<img id =\"bg\" src=\"/images/fondo.jpg\"/>
  <div class=\"alert alert-success\">
    <strong>Warning!</strong>  El usuario no existe <a href=\"login/index\" class=\"alert-link\">Login </a> 
  </div>
</div>

</body>
</html>";
     }else{


      //return view('principal.bienvenida') vista no implementada
     }
     

     
  }
}
