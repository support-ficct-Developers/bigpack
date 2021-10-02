@foreach ($materias as $materia)
    <div class="card" style="margin-bottom:20px;">
        <div class="card-header">
            <h3><a href="#">{{$materia->Nombre}}</a></h3>
        </div>
        <div class="card-body">
            <p>{{$materia->sigla}}</p>
            <div class="text-center">
                <button type="button" class="btn btn-success">Entrar</button>
            </div>
        </div>
    </div>
@endforeach