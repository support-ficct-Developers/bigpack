@extends('adminlte::page')

@section('title', 'Auxiliar - create')

@section('content_header')
    <h1>Registrar Auxiliar</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" action="{{route('auxiliares.store')}}" novalidate >

            @csrf
            <h5>Materias:</h5>
            <input type="text"  name="materias"  class="focus border-primary  form-control">
            @error('materias')
                <p>DEBE INGRESAR BIEN LAS MATERIAS</p>
            @enderror

            @csrf
            <h5>Nombre:</h5>
            <input type="text"  name="nombre"  class="focus border-primary  form-control">
            @error('nombre')
                <p>DEBE INGRESAR EL NOMBRE</p>
            @enderror
            
            @csrf
            <h5>Tipo:</h5>
            <select name="tipo" class="form-control" id="select-tipo" >
                <option value=0 >Seleccione el tipo</option>
                     @foreach ($tipos as $tipo)
                        <option value="{{ $tipo }}">{{ $tipo}}</option>
                    @endforeach 
            </select>

            @csrf
            <h5>Telefono:</h5>
            <input type="text"  name="telefono"  class="focus border-primary  form-control">
            @error('telefono')
                <p>DEBE INGRESAR EL TELEFONO</p>
            @enderror

            @csrf
            <h5>Descripcion:</h5>
            <input type="text"  name="descripcion"  class="focus border-primary  form-control">

            @csrf
            <h5>Imagen(link):</h5>
            <input type="link"  name="imagen"  class="focus border-primary  form-control">
            @error('imagen')
                <p>DEBE INGRESAR EL LINK</p>
            @enderror
            
            <br>
            <br>

            <button  class="btn btn-danger btn-sm" type="submit">Registrar</button>

            <a href="{{route('auxiliares.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>
        </form>

    </div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop