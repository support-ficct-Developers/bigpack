<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    @foreach ($auxiliars as $auxiliar)
    <section class="about section" id="about"> 
        <div class="about_container container grid">
            <img src="{{$auxiliar->imagen}}" alt="" class="about_img">
            <div class="about_data">
                <h1 class="desa_title">{{DB::table('materias')->where('id',$auxiliar->id_materia)->value('nombre')}}</h1>
                <h1 class="desa_title">{{$auxiliar->nombre}}</h1>
                     <span class="desa_subtitle">Auxiliar - {{$auxiliar->tipo}} </span>
                     <p class="about_description">Descripcion: {{$auxiliar->descripcion}}</p>
                    <div class="about_buttons">
                        <a href="http://wa.me//+591{{$auxiliar->telefono}}" target="_blank" class="button button--flex">
                            Contáctame<i class="uil uil-message button_icon"></i>
                        </a>
                    </div>
            </div>
        </div>
    </section>
    @endforeach
</body>
    