<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    {{--  @foreach ($packs as $pack)  --}}
    <section class="about section" id="about"> 
        <div class="about_container container grid">
            <img src="https://i.ibb.co/SQt2M26/tupapi.png" alt="" class="about_img">
            <div class="about_data">
                <h1 class="desa_title">Harold</h1>
                     <span class="desa_subtitle">Backend-Developer </span>
                     <p class="about_description">Estudiante de la Carrera de Ingeniera en Sistemas
                         de la Universidad Autonoma Gabriel Rene Moreno</p>
                    <div class="about_buttons">
                        <a href="#" class="button button--flex">
                            Contactame<i class="uil uil-message button_icon"></i>
                        </a>
                    </div>
            </div>
        </div>
    </section>
    {{--  @endforeach  --}}
</body>
    