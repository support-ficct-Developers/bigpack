@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
  <h1>LISTA DE MATERIAS</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-header">
        {{-- solo los que tienen permiso a esas rutas.metodo podran ver el button --}}
        @can('materias.create')
          <a class="btn btn-primary btb-sm" href="{{route('materias.create')}}">Registrar Materia</a>    
        @endcan
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <table class="table table-striped" id="materias" >
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col" width="5%">Semestre</th>
            <th scope="col">Nombre</th>
            <th scope="col">Sigla</th>
            <th scope="col" width="15%">Acciones</th>
            {{-- <th colspan=""></th> --}}
          </tr>
        </thead>
        
        <tbody>

          @foreach ($materias as $materia)
            <tr>
              <td>{{$materia->id}}</td>
              <td>{{$materia->id_semestre}}</td>
              <td>{{$materia->nombre}}</td>
              <td>{{$materia->sigla}}</td>
              <td >
                <form  action="{{route('materias.destroy',$materia)}}" method="post">
                  @csrf
                  @method('delete')
                    {{-- solo los que tienen permiso a esas rutas.metodo podran ver el button --}}
                    @can('materias.show') 
                    <a  class="btn btn-primary btn-sm" href="{{route('materias.show',$materia)}}">Ver</a>  
                    @endcan

                    @can('materias.edit')
                      <a class="btn btn-info btn-sm" href="{{route('materias.edit',$materia)}}">Editar</a>                 
                    @endcan

                    @can('materias.destroy')
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
     $('#materias').DataTable();
    } );
</script>
@stop