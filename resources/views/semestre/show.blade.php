@extends('adminlte::page')

@section('title', 'Pack')

@section('content_header')
@stop

@section('content')
<div class="container " style="background-color: white">
    <div class="row justify-content-center border rounded-top">
        <div class="col">
            {{-- datos --}}
            <div class="row border"> 
                <div class="col">
                    <div class="row">
                        <h5 class="font-weight-bold px-2">Semestre: </h5>
                        <h5>{{$materia->semestre->nombre}}</h5>
                    </div>
                    <div class="row">
                        <h5 class="font-weight-bold px-2">Materia: </h5>
                        <h5>{{$materia->nombre}}</h5>
                    </div>
                    <div class="row">
                        <h5 class="font-weight-bold px-2">Docente: </h5>
                        <h5>{{$materia->docente->nombre}}</h5>
                    </div>
                    <div class="row">
                        <a href="{{route('materias.index')}}"class="btn btn-warning text-white btn-sm m-2">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>       
</div>

<br>
<br>
@stop