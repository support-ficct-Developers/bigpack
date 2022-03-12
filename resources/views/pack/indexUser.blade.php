@extends('adminlte::page')

@section('title', 'Packs')

@section('content_header')
  
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
  <div class="card-header">
    <div align="center">
      <h3><b>Registrar pack</b></h3>
    </div>
  </div>
    <div class="card-body">
        <form method="post" action="{{route('packs.store2')}}" novalidate >
          @csrf
            <h5>Materia:</h5>
            <select name = "id_materia" id="id_materia" class="mi-selector form-control" >
                <option></option>
                    @foreach ($materias as $materia)
                        <option value="{{$materia->id}}">
                            {{$materia->nombre}}
                        </option>
                    @endforeach
            </select>
           
            @error('id_materia')
              <div class="text-danger">
                Debe elegir una opción.
              </div>
            @enderror

            <h5>Docente:</h5>
            <select name = "id_docente" id="id_docente" class="mi-selector form-control" >
                <option></option>
                    @foreach ($docentes as $docente)
                        <option value="{{$docente->id}}">
                            {{$docente->nombre}}
                        </option>
                    @endforeach
            </select>
           
            @error('id_docente')
              <div class="text-danger">
                Debe elegir una opción.
              </div>
            @enderror

            @csrf
            <h5>Link:</h5>
            <input type="text"  name="link"  placeholder="drive, mega, youtube, etc.." class="focus border-primary  form-control">
            @error('link')
              <div class="text-danger">
                Debe llenar este campo.
              </div>
            @enderror
            
            @csrf
            <h5>Descripcion:</h5>
            <input type="text"  name="descripcion"  placeholder="Ej. modelos de examenes, practicos, clases grabadas, etc.." class="focus border-primary  form-control">
            
            <div align="center">
              <button  class="btn btn-primary btn-sm mt-4" type="submit">Registrar</button>
            </div>
        </form>

    </div>
</div>

  <div class="card">
    <div class="card-header">
      <div align="center">
        <h3><b>Mis Packs</b></h3>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-striped" id="packs" >
        <thead>
          <tr>
            <th scope="col" width="15%">Materia</th>
            <th scope="col" width="15%">Docente</th>
            <th scope="col" width="15%">Link</th>
            <th scope="col">Descripcion</th>
            <th scope="col" width="15%">Estado</th>
            {{--  <th scope="col" width="15%">Acciones</th>  --}}
          </tr>
        </thead>
        
        <tbody>

          @foreach ($packs as $pack)
            <tr>
              <td>{{$pack->materia->nombre}}</td>
              <td>{{$pack->docente->nombre}}</td>
              <td>{{$pack->link}}</td>
              <td>{{$pack->descripcion}}</td>
              <td>
                @if ($pack->estado)
                    Habilitado
                    @else
                    No Habilitado
                @endif
              </td> 
            </tr>
          @endforeach
        </tbody> 

      </table>
    </div>
  </div>
@stop

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <script src="{{asset('js/mi-script.js')}}"></script>
@stop