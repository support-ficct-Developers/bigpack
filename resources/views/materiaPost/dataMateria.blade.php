@foreach ($materias as $materia)
    <div class="group bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all duration-300 flex flex-col h-full border-t-4 border-t-brand-500">
        <div class="flex items-start justify-between mb-4">
            <div class="w-12 h-12 rounded-lg bg-brand-50 text-brand-600 dark:bg-brand-900/30 dark:text-brand-400 flex items-center justify-center">
                <i class="fas fa-book text-xl"></i>
            </div>
            <span class="px-3 py-1 text-xs font-semibold text-gray-600 dark:text-gray-300 bg-gray-100 dark:bg-gray-700 rounded-full">
                {{ $materia->sigla }}
            </span>
        </div>
        
        <div class="flex-grow">
            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 line-clamp-2" title="{{ $materia->nombre }}">
                {{ $materia->nombre }}
            </h3>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-6 flex items-center">
                <i class="fas fa-layer-group w-4 h-4 mr-2 text-brand-500"></i>
                Semestre: {{ $materia->semestre->nombre ?? 'N/A' }}
            </p>
        </div>

        <a href="{{ route('materia.packs', $materia->id) }}" class="mt-auto inline-flex items-center justify-center w-full px-4 py-2.5 text-sm font-medium text-white bg-brand-600 rounded-lg hover:bg-brand-700 focus:ring-4 focus:ring-brand-300 dark:bg-brand-600 dark:hover:bg-brand-700 dark:focus:ring-brand-800 transition-colors duration-200">
            Ver Packs Disponibles
            <i class="fas fa-arrow-right ml-2 opacity-70 group-hover:translate-x-1 transition-transform"></i>
        </a>
    </div>
@endforeach
