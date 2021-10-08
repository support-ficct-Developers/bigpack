@extends('adminlte::page')

@section('title', 'Auxiliares - Edit')

@section('content_header')
    <h1>Editar Auxiliar</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" action="{{route('auxiliares.update',$auxiliare)}}" novalidate >

            @csrf
            @method('PATCH')

            @csrf
            <h5>Nombre:</h5>
            <input type="text"  name="materias" value="{{$auxiliare->materias}}" class="focus border-primary  form-control">
            @error('materias')
                <p>DEBE INGRESAR BIEN LAS MATERIAS</p>
            @enderror
                
            @csrf
            <h5>Nombre:</h5>
            <input type="text"  name="nombre" value="{{$auxiliare->nombre}}" class="focus border-primary  form-control">
            @error('nombre')
                <p>DEBE INGRESAR EL NOMBRE</p>
            @enderror

            <h5>Tipo:</h5>
            <input type="text"  name="tipo" value="{{$auxiliare->tipo}}" class="focus border-primary  form-control">
            @error('tipo')
                <p>DEBE INGRESAR EL TIPO</p>
            @enderror

            <h5>Telefono:</h5>
            <input type="text"  name="telefono" value="{{$auxiliare->telefono}}" class="focus border-primary  form-control">
            @error('telefono')
                <p>DEBE INGRESAR EL TELEFONO</p>
            @enderror

            @csrf
            <h5>Descripcion:</h5>
            <input type="text"  name="descripcion" value="{{$auxiliare->descripcion}}" class="focus border-primary  form-control">

            <h5>Imagen:</h5>
            <input type="link"  name="imagen" value="{{$auxiliare->imagen}}" class="focus border-primary  form-control">
            @error('imagen')
                <p>DEBE INGRESAR EL LINK</p>
            @enderror
            
            <br>
            <br>

            <button  class="btn btn-danger btn-sm" type="submit">Guardar</button>
            <a href="{{route('auxiliares.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>
        </form> 

    </div>
</div>
@stop