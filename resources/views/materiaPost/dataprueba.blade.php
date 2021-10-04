
@foreach ($materias as $materia)
   {{--  <div class="card" style="margin-bottom:20px;">
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
    </div>  --}}
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    
        <link rel="shortcut icon" href="imagenes/logo.png" />
    </head>

    <body>
        <section class="semestres section" id="semestres">
            <div class="public_container container grid">
                <div class="public_content" >
                    <div class="card-header">
                        <h3>{{$materia->nombre}}</h3>
                    </div>
                    <div class="card-body">
                        <p>Sigla: {{$materia->sigla}}</p>
                        <p>Semestre: {{DB::table('semestres')->where('id',$materia->id_semestre)->value('nombre')}}</p>
                        <span class="button button--flex button--small button--link semestres_button">
                            <a href="{{route('postPacks',$materia->id)}}" class="button--link">Ver packs</a>             
                            <i class="uil uil-arrow-from-right button_icon" ></i>  
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </body>
    
@endforeach