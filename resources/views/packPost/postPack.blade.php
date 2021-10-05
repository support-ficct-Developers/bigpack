@extends('adminlte::page')

@section('title', 'Materias - Enlaces')

@section('content_header')
    <h2 class="section_title">{{$materia}}</h2>
    <span class="section_subtitle">Enlaces</span>
@stop

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <main class="main">
            @include('packPost.dataPack')
        </main>
        
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
                <p class="footer_copy">&#169; SUPPORT. Todos los derechos Reservados</p>
            </div>
        </footer>
        <!--==================== SCROLL TOP ====================-->
            <a href="#" class="scrollup" id="scroll-up">
                <i class="uil uil-arrow-up scrollup_icon"></i>
            </a>
    </body>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
@stop

@section('js')
<!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{asset('js/main.js')}}"></script>
@stop
