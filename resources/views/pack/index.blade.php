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
          <a class="btn btn-primary btb-sm" href="{{route('packs.create')}}">Registrar Packs</a>    
        @endcan
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped" id="packs" >
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col" width="15%">Materia</th>
              <th scope="col" width="15%">Docente</th>
              <th scope="col" width="15%">Link</th>
              <th scope="col" width="15%">Descripcion</th>
              <th scope="col" width="15%">Autor</th>
              <th scope="col" width="15%">Estado</th>
              <th scope="col" width="20%">Acciones</th>
              {{-- <th colspan=""></th> --}}
            </tr>
          </thead>
          
          <tbody>
  
            @foreach ($packs as $pack)
              <tr>
                <td>{{$pack->id}}</td>
                <td>{{$pack->materia->nombre}}</td>
                <td>{{$pack->docente->nombre}}</td>
                <td>{{$pack->link}}</td>
                <td>{{$pack->descripcion}}</td>
                <td>
                  @if ($pack->user_id!=null)
                    {{$pack->user->name}}
                  @else
                      ANONIMO
                  @endif
                </td>
                <td>
                  @if ($pack->estado)
                      Habilitado
                      @else
                      No Habilitado
                  @endif
                </td> 
                <td >
                  <form  action="{{route('packs.destroy',$pack)}}" method="post">
                    @csrf
                    @method('delete')
  
                      @can('packs.edit')
                        <a class="btn btn-info btn-sm" href="{{route('packs.edit',$pack)}}">Editar</a>                 
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
     $('#packs').DataTable();
    } );
</script>
@stop