@foreach ($materias as $materia)
   <div class="card" style="margin-bottom:20px;">
        <div class="card-header">
            <h3>{{$materia->nombre}}</h3>
        </div>
        <div class="card-body">
            <p>Sigla: {{$materia->sigla}}</p>
            <p>Semestre: {{DB::table('semestres')->where('id',$materia->id_semestre)->value('nombre')}}</p>
            <div class="text-center">
                <a href="{{route('postPacks',$materia->id)}}"class="btn btn-primary text-white btn-sm">Ver Packs</a>
            </div>
        </div>
    </div>
@endforeach