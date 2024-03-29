@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>LISTA DE USUARIOS</h1>
@stop

@section('content')

    

    <div class="card">
        <div class="card-header">
            <a href="{{route('users.create')}}"class="btn btn-primary btb-sm"> Registrar Usuario</a>
        </div>
    </div>

    @if (session('error'))
        <div class="alert alert-danger">
            <strong>{{session('error')}}</strong>
        </div>
    @endif
    
    <div class="card">
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-striped" id="usuarios" >
        
            <thead>
        
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Rol</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
        
             <tbody>
              @foreach ($users as $user)
                @php  $usuario = App\Models\User::find($user->id);  @endphp
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->roles_name}}</td>
                  <td>
                    <form action="{{route('users.destroy', $usuario)}}" method="post">
                      @csrf
                      @method('delete')
                       {{-- <a class="btn btn-primary btn-sm" href="{{route('users.show',$user)}}">Ver</a> --}}
                        
                      <a href="{{route('users.edit',$usuario)}}" class="btn btn-info btn-sm">Editar</a>
        
                      <button class="btn btn-danger btn-sm" onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" 
                      value="Borrar">Eliminar</button> 
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
            $('#usuarios').DataTable();
        });
    </script>
@stop