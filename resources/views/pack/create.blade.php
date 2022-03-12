@extends('adminlte::page')

@section('title', 'Pack')

@section('content_header')
    <h1>Registrar Pack</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    <div class="card-body">
        <form method="post" action="{{route('packs.store')}}" novalidate >
            @csrf
            <h5>Materia:</h5>
            <select name = "id_materia" id="id_materia" class="mi-selector form-control" >
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
            <select name = "id_docente" id="id_docente" class="mi-selector form-control" >
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
            <h5>Link:</h5>
            <input type="text"  name="link"  placeholder="drive, mega, youtube, etc.." class="focus border-primary  form-control">
            @error('link')
                <p>DEBE INGRESAR UN LINK</p>
            @enderror
            
            @csrf
            <h5>Descripcion:</h5>
            <input type="text"  name="descripcion"  placeholder="Ej. modelos de examenes, practicos, clases grabadas, etc.." class="focus border-primary  form-control">
            
            <br>
            <br>

            <button  class="btn btn-danger btn-sm" type="submit">Registrar</button>

            <a href="{{route('packs.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>
        </form>

    </div>
</div>
@stop

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="{{asset('js/mi-script.js')}}"></script>
@stop