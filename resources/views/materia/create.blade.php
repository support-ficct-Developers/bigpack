@extends('adminlte::page')

@section('title', 'Materia')

@section('content_header')
    <h1>Registrar Materia</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" action="{{route('materias.store')}}" novalidate >
            @csrf
            <h5>Semestre:</h5>
            <select name = "id_semestre" id="id_semestre" class="form-control" onchange="habilitar()" >
                <option value="nulo">Seleccione el semestre</option>
                    @foreach ($semestres as $semestre)
                        <option value="{{$semestre->id}}">
                            {{$semestre->nombre}}
                        </option>
                    @endforeach
            </select>
 
           
            @error('id_semestre')
                <p>DEBE INGRESAR BIEN EL ID DEL SEMESTRE</p>
            @enderror

            @csrf
            <h5>Nombre:</h5>
            <input type="text"  name="nombre"  class="focus border-primary  form-control">
            @error('nombre')
                <p>DEBE INGRESAR BIEN EL NOMBRE</p>
            @enderror

            <h5>Sigla:</h5>
            <input type="text"  name="sigla"  class="focus border-primary  form-control">
            @error('sigla')
                <p>DEBE INGRESAR BIEN LA SIGLA</p>
            @enderror

            
           
            <br>
            <br>

            <button  class="btn btn-danger btn-sm" type="submit">Registrar</button>

            <a href="{{route('materias.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>
        </form>

    </div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop