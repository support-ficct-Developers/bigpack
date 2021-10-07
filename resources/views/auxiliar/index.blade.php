@extends('adminlte::page')

@section('title', 'Packs')

@section('content_header')
  <h1>LISTA DE PACKS</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-header">
        {{-- solo los que tienen permiso a esas rutas.metodo podran ver el button --}}
        @can('packs.create')
          <a class="btn btn-primary btb-sm" href="{{route('auxiliares.create')}}">Registrar Packs</a>    
        @endcan
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <table class="table table-striped" id="auxiliar" >
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Materia</th>
            <th scope="col">Nombre</th>
            <th scope="col">telefono</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Imagen</th>
            <th scope="col" width="15%">Acciones</th>
            {{-- <th colspan=""></th> --}}
          </tr>
        </thead>
        
        <tbody>

          @foreach ($auxiliars as $auxiliar)
            <tr>
              <td>{{$auxiliar->id}}</td>
              <td>{{DB::table('materias')->where('id',$pack->id_materia)->value('nombre')}}</td>
              <td>{{DB::table('docentes')->where('id',$pack->id_docente)->value('nombre')}}</td>
              <td>{{$auxiliar->link}}</td>
              <td>{{$auxiliar->descripcion}}</td>
              <td >
                <form  action="{{route('packs.destroy',$pack)}}" method="post">
                  @csrf
                  @method('delete')
                    {{-- solo los que tienen permiso a esas rutas.metodo podran ver el button --}}
                    @can('packs.show') 
                    <a  class="btn btn-primary btn-sm" href="{{route('packs.show',$auxiliar)}}">Ver</a>  
                    @endcan

                    @can('packs.edit')
                      <a class="btn btn-info btn-sm" href="{{route('packs.edit',$auxiliar)}}">Editar</a>                 
                    @endcan

                    @can('packs.destroy')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" 
                    value="Borrar">Eliminar</button>
                    @endcan  

                </form>
              </td>    
            </tr>
          @endforeach
        </tbody> 

      </table>
    </div>
  </div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
     $('#auxiliar').DataTable();
    } );
</script>
@stop