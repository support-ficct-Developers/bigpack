<!-- Sidebar -->
<aside id="logo-sidebar"
        :class="{ 'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen }"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-all duration-300 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700 flex flex-col justify-between"
        aria-label="Sidebar">
    
    <div class="h-full px-3 pb-4 overflow-y-auto w-64">
        <ul class="space-y-1.5 font-medium pb-20">
            <!-- INICIO -->
            <li>
                <a href="{{ route('home') }}" class="flex items-center p-2.5 text-gray-900 rounded-lg dark:text-white hover:bg-brand-50 dark:hover:bg-brand-900/30 group transition {{ request()->is('home') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-500' : '' }}">
                    <i class="fas fa-fw fa-home w-5 h-5 text-center text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-brand-600 dark:group-hover:text-brand-500 {{ request()->is('home') ? 'text-brand-600 dark:text-brand-500' : '' }}"></i>
                    <span class="ml-3">Inicio</span>
                </a>
            </li>

            <!-- HEADER Accesos Rápidos -->
            <li class="pt-4 pb-1">
                <span class="px-2 text-xs font-bold tracking-wider text-gray-500 uppercase dark:text-gray-400">ACCESOS RÁPIDOS</span>
            </li>

            <!-- Auxiliares -->
            <li>
                <a href="{{ route('auxiliares') }}" class="flex items-center p-2.5 text-gray-900 rounded-lg dark:text-white hover:bg-brand-50 dark:hover:bg-brand-900/30 group transition">
                    <i class="fas fa-fw fa-user-secret w-5 h-5 text-center text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-brand-600 dark:group-hover:text-brand-500"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Auxiliares</span>
                </a>
            </li>

            <!-- Semestres (Dropdown) -->
            <li x-data="{ openSemestres: false }">
                <button type="button" @click="openSemestres = !openSemestres" class="flex items-center justify-between w-full p-2.5 text-gray-900 transition duration-75 rounded-lg group hover:bg-brand-50 dark:text-white dark:hover:bg-brand-900/30">
                    <div class="flex items-center">
                        <i class="fas fa-fw fa-building w-5 h-5 text-center text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-brand-600 dark:group-hover:text-brand-500"></i>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Semestres</span>
                    </div>
                    <i class="fas fa-chevron-down w-3 h-3 transition-transform duration-200" :class="{ 'rotate-180': openSemestres }"></i>
                </button>
                <ul x-show="openSemestres" x-collapse x-cloak class="py-2 space-y-1">
                    @for ($i = 1; $i <= 9; $i++)
                        <li>
                            <a href="{{ route('semestre.materia', $i) }}" class="flex items-center w-full py-2 px-3 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-brand-50 dark:text-gray-300 dark:hover:text-white dark:hover:bg-gray-700">
                                <i class="fas fa-fw fa-lightbulb w-4 h-4 mr-2 text-center text-gray-400 group-hover:text-brand-500"></i>
                                Semestre {{ $i }}
                            </a>
                        </li>
                    @endfor
                    <li>
                        <a href="{{ route('semestre.materia', 10) }}" class="flex items-center w-full py-2 px-3 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-brand-50 dark:text-gray-300 dark:hover:text-white dark:hover:bg-gray-700">
                            <i class="fas fa-fw fa-lightbulb w-4 h-4 mr-2 text-center text-gray-400 group-hover:text-brand-500"></i>
                            Electivas
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('semestre.materia', 11) }}" class="flex items-center w-full py-2 px-3 text-sm text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-brand-50 dark:text-gray-300 dark:hover:text-white dark:hover:bg-gray-700">
                            <i class="fas fa-fw fa-lightbulb w-4 h-4 mr-2 text-center text-gray-400 group-hover:text-brand-500"></i>
                            Mod. de Graduación
                        </a>
                    </li>
                </ul>
            </li>

            <!-- HEADER Contactanos -->
            <li class="pt-4 pb-1">
                <span class="px-2 text-xs font-bold tracking-wider text-gray-500 uppercase dark:text-gray-400">CONTÁCTANOS A+</span>
            </li>

            <!-- Desarrolladores -->
            <li>
                <a href="{{ route('developers') }}" class="flex items-center p-2.5 text-gray-900 rounded-lg dark:text-white hover:bg-brand-50 dark:hover:bg-brand-900/30 group transition">
                    <i class="fas fa-fw fa-laptop-code w-5 h-5 text-center text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-brand-600 dark:group-hover:text-brand-500"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Desarrolladores</span>
                </a>
            </li>

            <!-- Facebook -->
            <li>
                <a href="https://www.facebook.com/AprendeMasFICCT" target="_blank" class="flex items-center p-2.5 text-gray-900 rounded-lg dark:text-white hover:bg-brand-50 dark:hover:bg-brand-900/30 group transition">
                    <i class="fab fa-fw fa-facebook w-5 h-5 text-center text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-brand-600 dark:group-hover:text-brand-500"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Facebook</span>
                </a>
            </li>

            <!-- Youtube -->
            <li>
                <a href="https://www.youtube.com/c/AprendeM%C3%A1sFICCT" target="_blank" class="flex items-center p-2.5 text-gray-900 rounded-lg dark:text-white hover:bg-brand-50 dark:hover:bg-brand-900/30 group transition">
                    <i class="fab fa-fw fa-youtube w-5 h-5 text-center text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-brand-600 dark:group-hover:text-brand-500"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Youtube</span>
                </a>
            </li>

        </ul>
    </div>
</aside>
