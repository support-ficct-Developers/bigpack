@extends('adminlte::page')

@section('title', 'PACKS')

@section('content_header')
    <h1>Editar Pack</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" action="{{route('packs.update',$materia)}}" novalidate >

            @csrf
            @method('PATCH')

            <h5>Materia:</h5>
            <select name = "id_materia" id="id_materia" class="form-control" onchange="habilitar()" >
                <option value="nulo">Seleccione la materia </option>
                    @foreach ($materias as $materia)
                        <option value="{{$materia->id}}">
                            {{$materia->nombre}}
                        </option>
                    @endforeach
            </select>
           
            @error('id_materia')
                <p>DEBE INGRESAR BIEN LA MATERIA</p>
            @enderror

            <h5>Docente:</h5>
            <select name = "id_docente" id="id_docente" class="form-control" onchange="habilitar()" >
                <option value="nulo">Seleccione el docente </option>
                    @foreach ($docentes as $docente)
                        <option value="{{$docente->id}}">
                            {{$docente->nombre}}
                        </option>
                    @endforeach
            </select>
           
            @error('id_docente')
                <p>DEBE INGRESAR EL DOCENTE</p>
            @enderror
                   
            @csrf
            <h5>Sigla:</h5>
            <input type="text"  name="link"  class="focus border-primary  form-control">
            
            @error('link')
                <p>DEBE INGRESAR UN LINK</p>
            @enderror

            <br>
            <br>

            <button  class="btn btn-danger btn-sm" type="submit">Guardar</button>
            <a href="{{route('packs.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>
        </form> 

    </div>
</div>
@stop