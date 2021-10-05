<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<body>
        @foreach ($materias as $materia)
        <section class="section_seme">  
            <div class="pack_container container grid">
                <div class="pack_content">
                    <div class="card-header">
                        <h3>{{$materia->nombre}}</h3>
                    </div>
                    <div class="card-body">
                        <p>Sigla: {{$materia->sigla}}</p>
                        <p>Semestre: {{DB::table('semestres')->where('id',$materia->id_semestre)->value('nombre')}}</p>
                        <span class="button button--flex button--small button--link semestres_button">
                            <a href="{{route('postPacks',$materia->id)}}" class="button--link">Ver packs</a>             
                            <i class="uil uil-arrow-from-right button_icon"></i>  
                        </span>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
</body>
