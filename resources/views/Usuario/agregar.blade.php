@extends('layouts.admin')
        @section('content')

    {!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
    <div class="form-group">
        {!!Form::label('Usuario','usuario:')!!}
        {!!Form::text('usuario',null,['class'=>'form-control','placeholder'=>'Nombre de Usuario'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('Nombre','nombre:')!!}
        {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre completo'])!!}
    </div>
        <br/>

    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
    @endsection