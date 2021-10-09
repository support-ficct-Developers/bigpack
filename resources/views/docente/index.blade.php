@extends('adminlte::page')

@section('title', 'Docentes')

@section('content_header')
  <h1>Listas de docentes</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-header">
        {{-- solo los que tienen permiso a esas rutas.metodo podran ver el button --}}
        @can('docentes.create')
          <a class="btn btn-primary btb-sm" href="{{url('/docentes/create')}}">Registrar docentes</a>    
        @endcan
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <table class="table table-striped" id="docentes" >
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre Completo</th>
            <th scope="col" width="20%">Acciones</th>
            {{-- <th colspan=""></th> --}}
          </tr>
        </thead>
        
        <tbody>

          @foreach ($docentes as $docente)
            <tr>
              <td>{{$docente->id}}</td>
              <td>{{$docente->nombre}}</td>
              <td >
                <form  action="{{route('docentes.destroy',$docente)}}" method="post">
                  @csrf
                  @method('delete')
                    {{-- solo los que tienen permiso a esas rutas.metodo podran ver el button --}}
                    @can('docentes.show') 
                    <a  class="btn btn-primary btn-sm" href="{{route('docentes.show',$docente)}}">Ver</a>  
                    @endcan

                    @can('docentes.edit')
                      <a class="btn btn-info btn-sm" href="{{route('docentes.edit',$docente)}}">Editar</a>                 
                    @endcan

                    @can('docentes.destroy')
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
     $('#docentes').DataTable();
    } );
</script>
@stop
