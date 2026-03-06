<!-- Footer -->
<footer class="bg-white mt-8 border-t border-gray-200 dark:border-gray-800 dark:bg-gray-900 transition-colors duration-200">
    <div class="mx-auto max-w-screen-xl p-6 lg:p-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="{{ url('/') }}" class="flex items-center mb-4">
                    <span class="self-center text-3xl font-bold whitespace-nowrap text-gray-900 dark:text-white">Ficct-Soft</span>
                </a>
                <p class="text-xl font-semibold text-brand-500 mb-2">Aprende+</p>
                <p class="text-sm text-gray-500 dark:text-gray-400 font-medium">
                    #Estamos_para_ayudarte <br> #Cuenta_con_nosotros
                </p>
            </div>
            
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-2 lg:gap-16">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Enlaces</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="{{ route('home') }}" class="hover:text-brand-500 transition">Inicio</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ route('auxiliares') }}" class="hover:text-brand-500 transition">Auxiliares</a>
                        </li>
                        <li>
                            <a href="{{ route('developers') }}" class="hover:text-brand-500 transition">Desarrolladores</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Redes Sociales</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium flex gap-5 mt-2">
                        <li>
                            <a href="https://www.facebook.com/AprendeMasFICCT" target="_blank" class="text-gray-500 hover:text-brand-500 dark:hover:text-brand-400 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCz9Q7IBBcKw78nqP7V54WBA" target="_blank" class="text-gray-500 hover:text-red-600 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">YouTube</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://chat.whatsapp.com/IIZZdKyTiW03F9IOdDpTKZ" target="_blank" class="text-gray-500 hover:text-green-500 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.031 2c-5.466 0-9.914 4.453-9.914 9.92 0 1.751.46 3.458 1.332 4.965L2 22l5.242-1.378a9.882 9.882 0 0 0 4.789 1.234h.004c5.463 0 9.912-4.454 9.912-9.92 0-2.651-1.034-5.143-2.909-7.018A9.873 9.873 0 0 0 12.031 2Zm.004 16.794a8.216 8.216 0 0 1-4.186-1.14l-.3-.178-3.111.815.83-3.031-.195-.311a8.167 8.167 0 0 1-1.258-4.382c0-4.524 3.682-8.205 8.209-8.205 2.193 0 4.254.855 5.805 2.408a8.158 8.158 0 0 1 2.398 5.795c-.001 4.523-3.682 8.205-8.192 8.205Zm4.498-6.137c-.247-.124-1.46-.723-1.687-.806-.228-.083-.393-.124-.559.124-.165.248-.636.806-.778.971-.144.165-.289.186-.536.062-.247-.124-1.042-.385-1.986-1.228-.734-.655-1.23-1.464-1.374-1.712-.144-.248-.016-.381.108-.505.112-.112.247-.289.37-.433.123-.146.165-.248.247-.413.082-.165.041-.311-.021-.434-.062-.124-.559-1.348-.765-1.846-.2-.486-.403-.42-.56-.427-.145-.006-.312-.008-.478-.008-.166 0-.435.062-.663.311-.228.248-.869.849-.869 2.069 0 1.22.89 2.402 1.014 2.567.124.165 1.745 2.668 4.23 3.74.591.254 1.052.406 1.411.519.593.189 1.133.162 1.558.098.473-.07 1.46-.597 1.666-1.173.206-.576.206-1.069.145-1.173-.062-.103-.228-.165-.475-.289Z" clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">WhatsApp</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://t.me/joinchat/Cohi-d79IsViMGIx" target="_blank" class="text-gray-500 hover:text-blue-500 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M12 0a12 12 0 1012 12A12.013 12.013 0 0012 0zm5.66 8.35c-.32 2.76-1.63 8.32-2.3 10.88-.28 1.08-.79 1.45-1.28 1.5-.95.1-1.71-.62-2.61-1.2-1.41-.93-2.21-1.5-3.58-2.4-1.55-1.02-.55-1.58.37-2.54.24-.25 4.38-4.01 4.46-4.36a.375.375 0 00-.08-.34c-.11-.1-.28-.07-.4.04-1.63 1.1-4.94 3.28-5.32 3.53-.55.37-1.04.55-1.52.54-.53-.01-1.55-.3-2.31-.55-.93-.3-1.66-.46-1.61-.98.03-.26.4-.53 1.1-.8 4.34-1.89 7.23-3.14 8.68-3.74 4.12-1.71 4.98-2.01 5.54-2.02.12 0 .4.03.55.15.13.11.16.27.17.41 0 .2-.02.43-.05.6Z"/>
                                </svg>
                                <span class="sr-only">Telegram</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
                © {{ date('Y') }} FICCTSOFT. Todos los derechos reservados.
            </span>
        </div>
    </div>
</footer>
