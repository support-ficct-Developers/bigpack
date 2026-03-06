@extends('layouts.public')

@section('title', 'FicctSoft')

@section('content')

    <body>
        <!--==================== MAIN ====================-->
        <main class="w-full flex-1">
            <!--==================== HOME ====================-->
            <section class="w-full py-12 md:py-24 home_content" id="home">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                        <div class="flex flex-col space-y-6 order-2 md:order-1">
                            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white leading-tight">
                                FicctSoft <br>
                                <span class="text-brand-600 dark:text-brand-500">FICCT</span>
                            </h1>
                            <div id="typewriter" class="text-xl md:text-2xl font-medium text-gray-600 dark:text-gray-300 h-8"></div>
                            <p class="text-base text-gray-500 dark:text-gray-400 max-w-lg leading-relaxed">
                                Hola, Aquí encontrarás links a repositorios de material de apoyo
                                para todas las materias de la Facultad de Ingeniería en Ciencias de la Computación.
                            </p>
                            
                            <div class="flex items-center space-x-4 pt-4">
                                <a href="https://www.facebook.com/AprendeMasFICCT" target="_blank" class="w-10 h-10 rounded-full bg-brand-50 text-brand-600 dark:bg-brand-900/30 dark:text-brand-500 flex items-center justify-center hover:bg-brand-600 hover:text-white dark:hover:bg-brand-600 transition duration-300">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.youtube.com/channel/UCz9Q7IBBcKw78nqP7V54WBA" target="_blank" class="w-10 h-10 rounded-full bg-brand-50 text-brand-600 dark:bg-brand-900/30 dark:text-brand-500 flex items-center justify-center hover:bg-brand-600 hover:text-white dark:hover:bg-brand-600 transition duration-300">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>

                        <div class="flex justify-center md:justify-end order-1 md:order-2 home_img">
                            <!-- Agregado 'move' y 'data-speed' para el parallax parallax effect de main.js -->
                            <img src="{{ asset('imagenes/logo.png') }}" data-speed="-2" alt="Logo FicctSoft" class="move w-64 md:w-80 h-auto filter drop-shadow-xl hover:-translate-y-2 transition-transform duration-500 animate-pulse-slow">
                        </div>
                    </div>
                </div>
            </section>
            
            <!--====================Semestres ====================-->
            <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16" id="semestres">
                
                <div class="text-center mb-12">
                     <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Semestres y Materias</h2>
                     <p class="mt-4 text-gray-500 dark:text-gray-400">Selecciona el semestre para acceder a todo el material disponible.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <!--==================== Semestres Loop (Simplificado con un array) ====================-->
                    @php
                        $semestresData = [
                            1 => 'Primer Semestre', 2 => 'Segundo Semestre', 3 => 'Tercer Semestre',
                            4 => 'Cuarto Semestre', 5 => 'Quinto Semestre', 6 => 'Sexto Semestre',
                            7 => 'Séptimo Semestre', 8 => 'Octavo Semestre', 9 => 'Noveno Semestre',
                            10 => 'Electivas', 11 => 'Modalidad de Graduación'
                        ];
                    @endphp

                    @foreach($semestresData as $id => $title)
                    <!-- Agregado 'semestres_content' para que lo reconozca el ScrollReveal de main.js -->
                    <div class="semestres_content group bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all duration-300 flex flex-col justify-between items-center text-center">
                        <div class="mb-6 bg-brand-50 dark:bg-brand-900/20 w-24 h-24 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('imagenes/logo.png') }}" alt="" class="w-14 h-14">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-6 h-12 flex items-center justify-center">{{ $title }}</h3>
                        
                        <a href="{{ route('semestre.materia', $id) }}" class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-brand-600 bg-brand-50 rounded-lg hover:bg-brand-600 hover:text-white dark:text-brand-400 dark:bg-brand-900/30 dark:hover:bg-brand-500 dark:hover:text-white transition-colors duration-200">
                            Ver materias
                            <i class="uil uil-arrow-right ml-2"></i>
                        </a>
                    </div>
                    @endforeach
                </div>
            </section>
        </main>
    </body>

@stop
