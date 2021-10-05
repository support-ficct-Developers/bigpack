<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    @foreach ($packs as $pack)
        <section class="section_seme">
            <div class="pack_container container grid">
                <div class="pack_content">
                    <div class="semestres_modal-content">
                        <h4 class="semestres_modal-title">Docente: {{DB::table('docentes')->where('id',$pack->id_docente)->value('nombre')}}</h4>
                        <h3 class="semestres_title">Descripcion: {{$pack->id_docente}}</h3>
                        <ul class="semestres_modal-semestres ">
                            <li class="semestres_modal-service">
                                <i class="uil uil-check-circle semestres_modal-icon"></i>
                                <p>{{$pack->link}}</p>
                            </li>
                        </ul>
                        <a href="{{$pack->link}}" class="button button--flex semestres_btt">
                            Ver Link<i class="uil uil-message button_icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
</body>
    
