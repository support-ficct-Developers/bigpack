@extends('layouts.public')

@section('title', 'Aprende + | Desarrolladores')

@section('content')
    <main class="w-full flex-1">
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16" id="about">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white uppercase tracking-wider">Desarrolladores</h2>
                <span class="mt-4 text-gray-500 dark:text-gray-400 block font-medium">Acerca de nosotros</span>
            </div>

            <!-- J Daniel -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden mt-8 max-w-4xl mx-auto border border-gray-100 dark:border-gray-700 transition-all hover:shadow-2xl">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center p-8">
                    <div class="flex justify-center md:justify-end">
                        <div class="w-48 h-48 md:w-64 md:h-64 rounded-full overflow-hidden border-4 border-brand-100 dark:border-brand-900/50 shadow-inner">
                            <!-- Si la imagen daniel2.png está dentro del blob antes, la ponemos normal ahora -->
                            <img src="{{ asset('imagenes/daniel2.png') }}" alt="J Daniel" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="text-center md:text-left flex flex-col items-center md:items-start space-y-4">
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Jose Daniel - Owner</h1>
                        <span class="inline-block px-3 py-1 bg-brand-100 text-brand-700 dark:bg-brand-900/40 dark:text-brand-300 rounded-full text-sm font-semibold">Backend-Developer</span>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Egresado de la Carrera de Ingeniería en Sistemas 2018 - 2023
                        </p>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Intercentro FICCT 2022 - 2023
                        </p>
                        <a href="http://wa.me//+59169086228" target="_blank" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-brand-600 hover:bg-brand-700 dark:hover:bg-brand-500 shadow-sm transition-colors duration-200 mt-4">
                            Contáctame 
                            <i class="fab fa-whatsapp ml-2 text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Harold -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden mt-8 max-w-4xl mx-auto border border-gray-100 dark:border-gray-700 transition-all hover:shadow-2xl">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center p-8">
                    <div class="flex justify-center md:justify-end">
                        <div class="w-48 h-48 md:w-64 md:h-64 rounded-full overflow-hidden border-4 border-green-100 dark:border-green-900/50 shadow-inner">
                            <img src="{{ asset('imagenes/Harold.png') }}" alt="Harold" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="text-center md:text-left flex flex-col items-center md:items-start space-y-4">
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Harold</h1>
                        <span class="inline-block px-3 py-1 bg-green-100 text-green-700 dark:bg-green-900/40 dark:text-green-300 rounded-full text-sm font-semibold">Backend-Developer</span>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Egresado de la Carrera de Ingeniería en Sistemas 2018 - 2023
                        </p>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Secretario General de Sistemas 2022 - 2024
                        </p>
                        <a href="http://wa.me//+59171190290" target="_blank" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-brand-600 hover:bg-brand-700 dark:hover:bg-brand-500 shadow-sm transition-colors duration-200 mt-4">
                            Contáctame 
                            <i class="fab fa-whatsapp ml-2 text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Darwin -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden mt-8 max-w-4xl mx-auto border border-gray-100 dark:border-gray-700 transition-all hover:shadow-2xl">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center p-8">
                    <div class="flex justify-center md:justify-end">
                        <div class="w-48 h-48 md:w-64 md:h-64 rounded-full overflow-hidden border-4 border-purple-100 dark:border-purple-900/50 shadow-inner">
                            <img src="{{ asset('imagenes/darwin.png') }}" alt="Darwin" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="text-center md:text-left flex flex-col items-center md:items-start space-y-4">
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Darwin</h1>
                        <span class="inline-block px-3 py-1 bg-purple-100 text-purple-700 dark:bg-purple-900/40 dark:text-purple-300 rounded-full text-sm font-semibold">Backend-Developer</span>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Egresado de la Carrera de Ingeniería Informática 2018 - 2023
                        </p>
                        
                        <a href="http://wa.me//+59172182712" target="_blank" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-brand-600 hover:bg-brand-700 dark:hover:bg-brand-500 shadow-sm transition-colors duration-200 mt-4">
                            Contáctame 
                            <i class="fab fa-whatsapp ml-2 text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Luishiño -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden mt-8 max-w-4xl mx-auto border border-gray-100 dark:border-gray-700 transition-all hover:shadow-2xl">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center p-8">
                    <div class="flex justify-center md:justify-end">
                        <div class="w-48 h-48 md:w-64 md:h-64 rounded-full overflow-hidden border-4 border-yellow-100 dark:border-yellow-900/50 shadow-inner">
                            <img src="{{ asset('imagenes/luishino.png') }}" alt="Luishiño" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="text-center md:text-left flex flex-col items-center md:items-start space-y-4">
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Luishiño</h1>
                        <span class="inline-block px-3 py-1 bg-yellow-100 text-yellow-700 dark:bg-yellow-900/40 dark:text-yellow-300 rounded-full text-sm font-semibold">Backend-Developer</span>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Estudiante de la Carrera de Ingeniería en Sistemas de la Universidad Autónoma Gabriel René Moreno
                        </p>
                        <a href="http://wa.me//+59161320208" target="_blank" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-brand-600 hover:bg-brand-700 dark:hover:bg-brand-500 shadow-sm transition-colors duration-200 mt-4">
                            Contáctame 
                            <i class="fab fa-whatsapp ml-2 text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

        </section>
    </main>
@stop
