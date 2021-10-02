@extends('adminlte::page')

@section('title', 'Autos')

@section('content_header')
    <h1>Editar Materia</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" action="{{route('marcas.update',$materia)}}" novalidate >

            @csrf
            @method('PATCH')

            <h5>Semestre:</h5>
            <select name = "id_semestre" id="idMarca" class="form-control" onchange="habilitar()" >
                <option value="nulo">Seleccione la marca</option>
                    @foreach ($semestres as $semestre)
                        <option value="{{$semestre->id}}">
                            {{$semestre->nombre}}
                        </option>
                    @endforeach
            </select>
            
            @error('idMarca')
            <p>DEBE INGRESAR BIEN EL ID</p>
            @enderror
            
            <h5>Materia:</h5>
            <input type="text"  name="nombre" value="{{$materia->nombre}}" class="focus border-primary  form-control" >
            @error('nombre')
            <p>DEBE INGRESAR BIEN EL NOMBRE</p>
            @enderror

            <h5>Sigla:</h5>
            <input type="text"  name="sigla" value="{{$materia->sigla}}" class="focus border-primary  form-control" >
            @error('sigla')
            <p>DEBE INGRESAR BIEN LA SIGLA</p>
            @enderror

            
            
            <br>
            <br>

            <button  class="btn btn-danger btn-sm" type="submit">Guardar</button>
            <a href="{{route('materias.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>
        </form> 

    </div>
</div>
@stop