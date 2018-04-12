@extends('layouts.inicio');
		@section('content')

		    {!!Form::open(['route'=>'mostrar.store', 'method'=>'POST'])!!}
	<div>	    
    {!!Form::label('cuenta','Usuario:')!!}
          <select name="cuenta" class="form-control">
 <?php
$tama = count ($cuentas); 
  for ($i=0;$i<$tama;$i++){

   $cuenta = $cuentas[$i]->id_cuenta;
 echo " <option  value=\"$cuenta\">$cuenta</option>";
}
?>
		</select>
  </div>
        
    <br/>
    {!!Form::submit('Elegir',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
    @endsection