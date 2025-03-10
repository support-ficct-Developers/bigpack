@extends('adminlte::page')

@section('title', 'Auxiliares')

@section('content_header')
    <h1>LISTA DE AUXILIARES</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            {{-- solo los que tienen permiso a esas rutas.metodo podran ver el button --}}
            @can('packs.create')
                <a class="btn btn-primary btb-sm" href="{{ route('auxiliares.create') }}">Registrar Auxiliar</a>
            @endcan
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="auxiliar">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Materias</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">telefono</th>
                            <th scope="col">Imagen</th>
                            <th scope="col" width="15%">Acciones</th>
                            {{-- <th colspan=""></th> --}}
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($auxiliars as $auxiliar)
                            <tr>
                                <td>{{ $auxiliar->id }}</td>
                                <td>{{ $auxiliar->materias }}</td>
                                <td>{{ $auxiliar->nombre }}</td>
                                <td>{{ $auxiliar->telefono }}</td>
                                <td>{{ $auxiliar->imagen }}</td>
                                <td>
                                    <form action="{{ route('auxiliares.destroy', $auxiliar) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        {{-- solo los que tienen permiso a esas rutas.metodo podran ver el button --}}

                                        @can('auxiliares.edit')
                                            <a class="btn btn-info btn-sm"
                                                href="{{ route('auxiliares.edit', $auxiliar) }}">Editar</a>
                                        @endcan

                                        @can('auxiliares.destroy')
                                            <button class="btn btn-danger btn-sm"
                                                onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')"
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
            $('#auxiliar').DataTable();
        });
    </script>
@stop
