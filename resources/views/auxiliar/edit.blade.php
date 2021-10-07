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

            <h5>Materia:</h5>
            <select name = "id_materia" id="id_materia" class="form-control" onchange="habilitar()" >
                <option value="{{$auxiliare->id_materia}}">{{DB::table('materias')->where('id',$auxiliare->id_materia)->value('nombre')}}</option>
                    @foreach ($materias as $materia)
                        <option value="{{$materia->id}}">
                            {{$materia->nombre}}
                        </option>
                    @endforeach
            </select>
            @error('id_materia')
                <p>DEBE INGRESAR BIEN LA MATERIA</p>
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