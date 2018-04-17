@extends('layouts.inicio')
		@section('content')

        <h2> Debito</h2>

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

    <div class="form-group">
        {!!Form::label('des','Descripcion:')!!}
        <br/>
        {!!Form::textarea('des',null,['class'=>'form-control','placeholder'=>'Descripcion transferencia','name'=>'des'])!!}
    </div>
        
    <br/>
    {!!Form::submit('Debitar',['class'=>'btn btn-primary','name'=>'debito'])!!}
    {!!Form::close()!!}
    @endsection