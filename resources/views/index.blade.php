@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="css/styles.css">

    <link rel="shortcut icon" href="imagenes/logo.png" />
    <title>Support</title>
</head>
@stop

@section('content')

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav_logo">Support</a>
            <div class="nav_btns">
                <i class="uil uil-moon change-theme" id="theme-button"></i>
            </div>
        </nav>
    </header>
    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home_container container grid">
                <div class="home_content grid">
                    <div class="home_social">
                        <a href="" target="_blank" class="home_social-icon">
                            <i class="uil uil-telegram-alt"></i>
                        </a>
                        <a href="" target="_blank" class="home_social-icon">
                            <i class="uil uil-whatsapp"></i>
                        </a>
                    </div>
                    
                    <div class="home_img">
                        <img src="imagenes/logo.png" alt="" class="about_img">
                    </div>
                    <div class="home_data">
                        <h1 class="home_title">Support<br><span class="home__title-color">FICCT</span></h1>
                        <div id="typewriter"></div>
                        <p class="home_description">Aqui encontraras los packs de materias de todos los semestres</p>
                    </div>
                </div>
                {{--  <div class="home__scroll">
                    <a href="#semestres" class="home_scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                    </a>
                </div>  --}}
            </div>
        </section>
    <!--====================Semestres ====================-->
    <section class="semestres section" id="semestres">

        <div class="semestres_container container grid">
            <!--==================== Primer Semestre ====================-->
            <div class="semestres_content">
                <div>
                    <img src="imagenes/logo.png" alt="" class="semestres__img">
                    <h3 class="semestres_title">Primer <br> Semestre</h3>
                </div>

                <span class="button button--flex button--small button--link semestres_button">
                    <a href="" target="_blank" class="button--link">Ver más</a>             
                    <i class="uil uil-arrow-from-right button_icon" ></i>  
                </span>
            </div>
            <!--==================== Segundo Semestre ====================-->
            <div class="semestres_content">
                <div>
                    <img src="imagenes/logo.png" alt="" class="semestres__img">
                    <h3 class="semestres_title">Segundo <br> Semestre</h3>
                </div>

                <span class="button button--flex button--small button--link semestres_button">
                    <a href="" target="_blank" class="button--link">Ver más</a> 
                    <i class="uil uil-arrow-from-right button_icon" ></i>
                </span>
            </div>
            <!--==================== Tercer Semestre ====================-->
            <div class="semestres_content">
                <div>
                    <img src="imagenes/logo.png" alt="" class="semestres__img">
                    <h3 class="semestres_title">Tercer <br> Semestre</h3>
                </div>

                <span class="button button--flex button--small button--link semestres_button">
                    <a href="" target="_blank" class="button--link">Ver más</a> 
                    <i class="uil uil-arrow-from-right button_icon" ></i>
                </span>
            </div>
            <!--==================== Cuarto Semestre ====================-->
            <div class="semestres_content">
                <div>
                    <img src="imagenes/logo.png" alt="" class="semestres__img">
                    <h3 class="semestres_title">Cuarto <br> Semestre</h3>
                </div>

                <span class="button button--flex button--small button--link semestres_button">
                    <a href="" target="_blank" class="button--link">Ver más</a> 
                    <i class="uil uil-arrow-from-right button_icon" ></i>
                </span>
            </div>
            <!--==================== Quinto Semestre ====================-->
            <div class="semestres_content">
                <div>
                    <img src="imagenes/logo.png" alt="" class="semestres__img">
                    <h3 class="semestres_title">Quinto <br> Semestre</h3>
                </div>

                <span class="button button--flex button--small button--link semestres_button">
                    <a href="" target="_blank" class="button--link">Ver más</a> 
                    <i class="uil uil-arrow-from-right button_icon" ></i>
                </span>
            </div>
            <!--==================== Sexto Semestre ====================-->
            <div class="semestres_content">
                <div>
                    <img src="imagenes/logo.png" alt="" class="semestres__img">
                    <h3 class="semestres_title">Sexto <br> Semestre</h3>
                </div>

                <span class="button button--flex button--small button--link semestres_button">
                    <a href="" target="_blank" class="button--link">Ver más</a> 
                    <i class="uil uil-arrow-from-right button_icon" ></i>
                </span>
            </div>
            <!--==================== Septimo Semestre ====================-->
            <div class="semestres_content">
                <div>
                    <img src="imagenes/logo.png" alt="" class="semestres__img">
                    <h3 class="semestres_title">Septimo <br> Semestre</h3>
                </div>

                <span class="button button--flex button--small button--link semestres_button">
                    <a href="" target="_blank" class="button--link">Ver más</a> 
                    <i class="uil uil-arrow-from-right button_icon" ></i>
                </span>
            </div>
            <!--==================== Octavo Semestre ====================-->
            <div class="semestres_content">
                <div>
                    <img src="imagenes/logo.png" alt="" class="semestres__img">
                    <h3 class="semestres_title">Octavo <br> Semestre</h3>
                </div>

                <span class="button button--flex button--small button--link semestres_button">
                    <a href="" target="_blank" class="button--link">Ver más</a>
                    <i class="uil uil-arrow-from-right button_icon" ></i>
                </span>
            </div>
            <!--==================== Noveno Semestre ====================-->
            <div class="semestres_content">
                <div>
                    <img src="imagenes/logo.png" alt="" class="semestres__img">
                    <h3 class="semestres_title">Noveno <br> Semestre</h3>
                </div>

                <span class="button button--flex button--small button--link semestres_button">
                    <a href="" target="_blank" class="button--link">Ver más</a> 
                    <i class="uil uil-arrow-from-right button_icon" ></i>
                </span>
            </div>
            <!--==================== Electivas ====================-->
            <div class="semestres_content">
                <div>
                    <img src="imagenes/logo.png" alt="" class="semestres__img">
                    <h3 class="semestres_title">Electivas</h3>
                </div>

                <span class="button button--flex button--small button--link semestres_button">
                    <a href="" target="_blank" class="button--link">Ver más</a> 
                    <i class="uil uil-arrow-from-right button_icon" ></i>
                </span>
            </div>
    </section>
</main>

<!--==================== FOOTER ====================-->
<footer class="footer">
    <div class="footer_bg">
        <div class="footer__content">
        <div class="footer_container container grid">
            <div>
                <h1 class="footer_title">Support <!-- <img src="./img/logo.png" alt="" class="footer__img"> --></h1>
                <h1 class="footer_title">Aprende+ <!-- <img src="./img/logo.png" alt="" class="footer__img"> --></h1>
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
        <!--==================== SCROLL TOP ====================-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="uil uil-arrow-up scrollup_icon"></i>
        </a>
        <!--  Typewriter CSS Effect -->
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>
	<!--==================== MAIN JS ====================-->
    <script src="./js/main.js"></script>
</body>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
