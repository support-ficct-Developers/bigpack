@extends('adminlte::page')

@section('title', 'Materia')

@section('content_header')
    <h1>Editar Materia</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" action="{{route('materias.update',$materia)}}" novalidate >

            @csrf
            @method('PATCH')

            <h5>Semestre:</h5>
            <select name = "id_semestre" id="id_semestre" class="form-control" onchange="habilitar()" >
                <option value="{{$materia->id_semestre}}">{{DB::table('semestres')->where('id',$materia->id_semestre)->value('nombre')}}</option>
                    @foreach ($semestres as $semestre)
                        <option value="{{$semestre->id}}">
                            {{$semestre->nombre}}
                        </option>
                    @endforeach
            </select>
            
            @error('id_semestre')
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