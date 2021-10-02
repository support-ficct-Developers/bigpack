@foreach ($materias as $materia)
    <div class="card" style="margin-bottom:20px;">
        <div class="card-header">
            <h3>{{DB::table('semestres')->where('id',$materia->id_semestre)->value('nombre')}}</h3>
        </div>
        <div class="card-body">
            <p>{{$materia->sigla}}</p>
            <p>{{$materia->nombre}}</p>
            <div class="text-center">
                <a href="{{route('materias.index')}}"class="btn btn-primary text-white btn-sm">Ver Packs</a>
            </div>
        </div>
    </div>
@endforeach