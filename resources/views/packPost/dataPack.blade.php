@foreach ($packs as $pack)
    <div class="card" style="margin-bottom:20px;">
        <div class="card-header">
            <h3>{{DB::table('materias')->where('id',$pack->id_materia)->value('sigla')}}</h3>
        </div>
        <div class="card-body">
            <p>Docente: {{DB::table('docentes')->where('id',$pack->id_docente)->value('nombre')}}</p>
            <p>Descripcion: {{$pack->descripcion}}</p>
            <p>Link: {{$pack->link}}</p>
            <div class="text-center">
                <a href="{{$pack->link}}"class="btn btn-primary text-white btn-sm">ver</a>
            </div>
        </div>
    </div>
@endforeach