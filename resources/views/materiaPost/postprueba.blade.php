@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <p></p>
@stop

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <link rel="shortcut icon" href="imagenes/logo.png" />
</head>

<body>
    <!--==================== MAIN ====================-->
    {{--  <main class="main">
        <section class="home section" id="home">  --}}
            
       {{--   </section>
    </main>  --}}
        @include('materiaPost.dataprueba')
<!--==================== FOOTER ====================-->
<footer class="footer">
    <div class="footer_bg">
        <div class="footer__content">
        <div class="footer_container container grid">
            <div>
                <h1 class="footer_title">Support <!-- <img src="imagenes/logo.png" alt="" class="footer__img"> --></h1>
                <h1 class="footer_title">Aprende+ <!-- <img src="imagenes/logo.png" alt="" class="footer__img"> --></h1>
                <span class="footer_subtitle">#Estamos_para_ayudarte <br> #Cuenta_con_nosotros</span>            </div>
            <ul class="footer_links">
                <li>
                    <a href="#" class="footer_link">Inicio</a>
                </li>
                <li>
                    <a href="#" class="footer_link">Materias</a>
                </li>
                <li>
                    <a href="#" class="footer_link">Contactanos</a>
                </li>
            </ul>
            <div class="footer_socials">
                <a href="" target="_blank" class="footer_social">
                    <i class="uil uil-facebook-f"></i>
                </a>
                <a href="" target="_blank" class="footer_social">
                    <i class="uil uil-telegram-alt"></i>
                </a>
                <a href="" target="_blank" class="footer_social">
                    <i class="uil uil-whatsapp"></i>
                </a>
            </div>
        </div>
    </div>
        <p class="footer_copy">&#169; Fernan. Todos los derechos Reservados</p>
    </div>
</footer>
</body>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
