@extends('layouts.admin');
        @section('content')

    <div style="height:100px; width: 180px;margin-left:auto;margin-right: auto;">

    {!!Form::open(['route'=>'login.store', 'method'=>'POST'])!!}
    <div class="form-group">
        {!!Form::label('usuario','Usuario:')!!}
        {!!Form::text('usuario',null,['class'=>'form-control','placeholder'=>'Usuario Personal','name'=>'usuario'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('pin','PIN:')!!}
        <br/>
        {!!Form::password('pin',null,['class'=>'form-control','placeholder'=>'Codigo de Cuenta','name'=>'pin'])!!}
    </div>
   <div class="form-group">
        {!!Form::label('contra','Contraseña:')!!}
        <br/>
        {!!Form::password('contra',null,['class'=>'form-control','placeholder'=>'Contraseña Personal','name'=>'contra'])!!}
    </div>
   
   
        <br/>

    {!!Form::submit('Ingresar',['class'=>'btn btn-primary','name'=>'ingresar'])!!}
    {!!Form::close()!!}
</div>
    @endsection