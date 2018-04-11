@extends('layouts.admin');
        @section('content')

    {!!Form::open(['route'=>'cuentausuario.store', 'method'=>'POST'])!!}
    <div>
         {!!Form::label('cuentax','cuenta:')!!}
          <select name="cuenta" class="form-control">

         <?php
$tama = count ($cuentas); 
  for ($i=0;$i<$tama;$i++){

   $user = $cuentas[$i]->idCuenta;
 

 echo " <option  value=\"$user\">$user</option>";

}

?>
        
        </select>
    </div>
    <div>
         {!!Form::label('usuariox','Usuario:')!!}
          <select name="usuario" class="form-control">

         <?php
$tama = count ($usuarios); 
  for ($i=0;$i<$tama;$i++){

   $user = $usuarios[$i]->idUsuarios;
   $nombre = $usuarios[$i]->nombre;

 echo " <option  value=\"$user\">$nombre</option>";

}

?>
        
        </select>
    </div>
        <br/>

    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
    @endsection