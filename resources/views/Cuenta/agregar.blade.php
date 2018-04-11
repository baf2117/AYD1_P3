@extends('layouts.admin');
        @section('content')

    {!!Form::open(['route'=>'cuenta.store', 'method'=>'POST'])!!}
    <div class="form-group">
        {!!Form::label('saldo','Saldo:')!!}
        {!!Form::text('saldo',null,['class'=>'form-control','placeholder'=>'Saldo Inicial de la cuenta'])!!}
    </div>
    <div>
         {!!Form::label('tipo','Tipo:')!!}
         <select name="Tipo" class="form-control">
            <option value="A">Ahorro</option>
            <option value="M">Monetaria</option>
        </select>
    </div>
        <br/>

    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
    @endsection