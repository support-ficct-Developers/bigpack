<!-- Top Navbar (Fija) -->
<nav class="fixed top-0 z-50 w-full bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 shadow-sm transition-colors duration-200">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            
            <!-- Lado Izquierdo (Botón de Sidebar y Logo) -->
            <div class="flex items-center justify-start">
                <button @click="sidebarOpen = !sidebarOpen" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 transition">
                    <span class="sr-only">Toggle sidebar</span>
                    <!-- Icono de 3 rayitas (Hamburguesa) -->
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                    </svg>
                </button>
                
                <a href="{{ route('home') }}" class="flex ml-2 md:mr-24 gap-3 items-center">
                    <div class="">
                        <img src="{{ asset('imagenes/logo.png') }}" alt="Logo" class="w-10 h-10">
                    </div>
                    <span class="self-center text-xl font-bold sm:text-2xl whitespace-nowrap dark:text-white tracking-tight">FicctSoft</span>
                </a>
            </div>
            
            <!-- Lado Derecho (Modo Oscuro, Autenticación) -->
            <div class="flex items-center gap-3">
                
                <!-- Botón Modo Oscuro -->
                <button @click="isDarkMode = !isDarkMode; localStorage.setItem('theme', isDarkMode ? 'dark' : 'light'); document.documentElement.classList.toggle('dark', isDarkMode)" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none rounded-lg text-sm p-2.5 transition">
                    <!-- Sol -->
                    <svg x-cloak x-show="!isDarkMode" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <!-- Luna -->
                    <svg x-cloak x-show="isDarkMode" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                </button>

                @guest
                    <div class="hidden sm:flex gap-2 text-sm font-medium">
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="text-gray-800 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg px-4 py-2 transition">Ingresar</a>
                        @endif
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-white bg-brand-600 hover:bg-brand-700 focus:ring-2 focus:ring-brand-300 rounded-lg px-4 py-2 dark:bg-brand-500 dark:hover:bg-brand-600 dark:focus:ring-brand-800 transition shadow-lg shadow-brand-500/20">Registrar</a>
                        @endif
                    </div>
                    <!-- Mobile Links para Guest -->
                    <div class="sm:hidden flex relative" x-data="{ menuOpen: false }">
                        <button @click="menuOpen = !menuOpen" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-white focus:outline-none p-2">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                        <div x-cloak x-show="menuOpen" @click.away="menuOpen = false" class="absolute right-0 top-full mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg py-1 border dark:border-gray-700 ring-1 ring-black ring-opacity-5">
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Ingresar</a>
                            @endif
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="block px-4 py-2 text-sm text-brand-600 dark:text-brand-400 font-bold hover:bg-gray-100 dark:hover:bg-gray-700">Registrar</a>
                            @endif
                        </div>
                    </div>
                @else
                    <!-- Menú Dropdown de Usuario Logueado -->
                    <div class="relative ml-2" x-data="{ open: false }">
                        <div>
                            <button @click="open = !open" @click.away="open = false" type="button" class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-brand-600 dark:hover:text-brand-500 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white transition" id="user-menu-button">
                                <div class="w-8 h-8 rounded-full bg-brand-500 text-white flex items-center justify-center font-bold text-sm mr-2 shadow-lg shadow-brand-500/30">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                                <span class="hidden sm:inline">{{ Auth::user()->name }}</span>
                                <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </div>
                        
                        <!-- Menú de opciones de usuario -->
                        <div x-cloak x-show="open"
                                x-transition:enter="transition ease-out duration-150"
                                x-transition:enter-start="transform opacity-0 scale-95 translate-y-2"
                                x-transition:enter-end="transform opacity-100 scale-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-100"
                                x-transition:leave-start="transform opacity-100 scale-100 translate-y-0"
                                x-transition:leave-end="transform opacity-0 scale-95 translate-y-2"
                                class="absolute right-0 top-full mt-2 z-50 my-2 w-56 text-base list-none bg-white rounded-lg border border-gray-100 shadow-xl dark:bg-gray-800 dark:border-gray-700">
                            <div class="py-3 px-4 bg-gray-50 dark:bg-gray-800/50 rounded-t-lg">
                                <span class="block text-sm font-semibold text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                                <span class="block text-xs font-light text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email ?? 'usuario@sistema.com' }}</span>
                            </div>
                            <ul class="py-2">
                                <li>
                                    <a href="{{ route('user.profile') }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-gray-300 dark:hover:text-white transition">Mi perfil</a>
                                </li>
                                 <li>
                                    <a href="{{ route('user.packs') }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-gray-300 dark:hover:text-white transition">Mis Packs</a>
                                </li>
                                <li>
                                    <hr class="my-1 border-gray-200 dark:border-gray-700">
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        class="block py-2 px-4 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-red-500 dark:hover:text-red-400 transition font-medium">
                                        Cerrar sesión
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</nav>
