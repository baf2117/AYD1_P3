@extends('layouts.admin');
        @section('content')

    <div style="height:100px; width: 180px;margin-left:auto;margin-right: auto;">

    {!!Form::open(['route'=>'registro.store', 'method'=>'POST'])!!}
    <div class="form-group">
        {!!Form::label('nombre','Nombre:')!!}
        {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre completo','name'=>'nombre'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('usuario','Usuario:')!!}
        {!!Form::text('usuario',null,['class'=>'form-control','placeholder'=>'Usuario Personal','name'=>'usuario'])!!}
    </div>
        <div class="form-group">
        {!!Form::label('correo','Correo:')!!}
        {!!Form::text('correo',null,['class'=>'form-control','placeholder'=>'banco_virtual@banco.com','name'=>'correo'])!!}

   <div class="form-group">
        {!!Form::label('contra','Contraseña:')!!}
        <br/>
        {!!Form::password('contra',null,['class'=>'form-control','placeholder'=>'Contraseña Personal','name'=>'contra'])!!}
    </div>
   
   
        <br/>

    {!!Form::submit('Registrar',['class'=>'btn btn-primary','name'=>'registro'])!!}
    {!!Form::close()!!}
</div>
    @endsection