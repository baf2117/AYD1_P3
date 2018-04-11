@extends('layouts.admin');
        @section('content')

    {!!Form::open(['route'=>'login.store', 'method'=>'POST'])!!}
    <div class="form-group">
        {!!Form::label('usuario','Usuario:')!!}
        {!!Form::text('usuario',null,['class'=>'form-control','placeholder'=>'Usuario Personal'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('pin','PIN:')!!}
        {!!Form::password('pin',null,['class'=>'form-control','placeholder'=>'Codigo de Cuenta'])!!}
    </div>
   <div class="form-group">
        {!!Form::label('contra','Contraseña:')!!}
        {!!Form::password('contra',null,['class'=>'form-control','placeholder'=>'Contraseña Personal'])!!}
    </div>
   
   
        <br/>

    {!!Form::submit('Ingresar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
    @endsection