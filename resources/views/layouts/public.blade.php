<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name=description content="Packs FicctSoft academico de todas las materias 1er semestre a 9no semestre">
    <meta name=author content="Aprende+">

    <title>@yield('title', config('app.name', 'FicctSoft'))</title>

    <!-- Script para prevenir Flash of Unstyled Content (FOUC) en Modo Oscuro -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js (Dropdowns y Sidebar) -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- FontAwesome (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- css anteriores --}}
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- Configuración para el tema Moderno / Dark Mode y Color Rojo -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#fef2f2',
                            100: '#fee2e2',
                            200: '#fecaca',
                            300: '#fca5a5',
                            400: '#f87171',
                            500: '#ef4444',
                            /* Tema rojo */
                            600: '#dc2626',
                            700: '#b91c1c',
                            800: '#991b1b',
                            900: '#7f1d1d',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        [x-cloak] {
            display: none !important;
        }

        /* Scrollbar Moderna */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #1f2937;
        }

        ::-webkit-scrollbar-thumb {
            background: #4b5563;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #6b7280;
        }
    </style>
    @yield('css')
</head>

<body class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200 font-sans antialiased"
    x-data="{ sidebarOpen: window.innerWidth >= 1024, isDarkMode: document.documentElement.classList.contains('dark') }">
    <div :class="{ 'dark': isDarkMode }">
        <div class="min-h-screen flex flex-col bg-gray-50 dark:bg-gray-900 transition-colors duration-200">

            @include('layouts.public.top-nav')

            <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900 flex-1">

                @include('layouts.public.sidebar')

                <!-- Área de Contenido Principal -->
                <div :class="{ 'lg:ml-64': sidebarOpen }"
                    class="p-4 sm:p-6 w-full h-full min-h-[calc(100vh-4rem)] transition-all duration-300 flex flex-col justify-between">

                    <main class="flex-1">
                        <!-- El Contenido de cada vista inyectado aquí -->
                        @yield('content')
                        <!--==================== SCROLL TOP ====================-->
                        <a href="#" class="scrollup" id="scroll-up">
                            <i class="uil uil-arrow-up scrollup_icon"></i>
                        </a>
                    </main>

                    @include('layouts.public.footer')
                </div>

            </div>

            <!-- Mobile Overlay para el Sidebar -->
            <div x-cloak x-show="sidebarOpen && window.innerWidth < 1024" @click="sidebarOpen = false"
                x-transition.opacity
                class="fixed inset-0 z-30 bg-gray-900 bg-opacity-50 dark:bg-opacity-80 backdrop-blur-sm lg:hidden">
            </div>

        </div>
    </div>
    <!--========== SCROLL REVEAL ==========-->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8737715429027255"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('js')
</body>

</html>
