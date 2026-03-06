@forelse ($packs as $pack)
    <div class="group bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all duration-300 flex flex-col h-full border-t-4 border-t-indigo-500">
        
        <div class="flex items-start mb-4">
            <div class="w-10 h-10 rounded-lg bg-indigo-50 text-indigo-600 dark:bg-indigo-900/30 dark:text-indigo-400 flex items-center justify-center mr-4 shrink-0">
                <i class="fas fa-folder-open text-lg"></i>
            </div>
            <div>
                <h4 class="text-sm font-bold text-gray-900 dark:text-white line-clamp-1" title="{{ $pack->docente->nombre }}">
                    <i class="fas fa-chalkboard-teacher mr-1 text-gray-400"></i>{{ $pack->docente->nombre }}
                </h4>
                @if ($pack->user_id)
                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                    <i class="fas fa-user-edit mr-1"></i>{{ $pack->user->name }}
                </p>
                @endif
            </div>
        </div>
        
        <div class="flex-grow mb-6">
            <h3 class="text-base font-medium text-gray-700 dark:text-gray-300">
                {{ $pack->descripcion }}
            </h3>
        </div>

        <a href="{{ $pack->link }}" target="_blank" class="mt-auto inline-flex items-center justify-center w-full px-4 py-2.5 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800 transition-colors duration-200">
            Abrir Enlace
            <i class="fas fa-external-link-alt ml-2 opacity-70 group-hover:-translate-y-0.5 group-hover:translate-x-0.5 transition-transform"></i>
        </a>
    </div>
@empty
    <div class="col-span-full py-12 text-center bg-white dark:bg-gray-800 rounded-2xl border border-dashed border-gray-300 dark:border-gray-700">
        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-100 dark:bg-gray-700 mb-4">
            <i class="fas fa-folder-minus text-2xl text-gray-400 dark:text-gray-500"></i>
        </div>
        <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">No hay packs disponibles</h3>
        <p class="text-gray-500 dark:text-gray-400">Aún no se han compartido materiales para esta materia.</p>
    </div>
@endforelse
