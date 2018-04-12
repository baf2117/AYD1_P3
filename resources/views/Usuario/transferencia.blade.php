@extends('layouts.inicio');
		@section('content')

    <H2>Transferencia</H2>

		    {!!Form::open(['route'=>'transferencias.store', 'method'=>'POST'])!!}
	<div>	    
    {!!Form::label('cuenta','Cuenta:')!!}
          <select name="cuenta" class="form-control">
 <?php
$tama = count ($cuentas); 
  for ($i=0;$i<$tama;$i++){

   $cuenta = $cuentas[$i]->idCuenta;
 echo " <option  value=\"$cuenta\">$cuenta</option>";
}
?>
</select>
</div>

    <div class="form-group">
        {!!Form::label('monto','Monto:')!!}
        {!!Form::text('monto',null,['class'=>'form-control','placeholder'=>'Monto a transferir'])!!}
    </div>
        
    <br/>
    {!!Form::submit('Transferir',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
    @endsection