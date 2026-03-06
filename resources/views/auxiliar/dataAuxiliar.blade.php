@foreach ($auxiliars as $auxiliar)
    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg hover:shadow-xl border border-gray-100 dark:border-gray-700 overflow-hidden transition-all duration-300 flex flex-col items-center p-6 text-center transform hover:-translate-y-1">
        
        <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-brand-100 dark:border-brand-900/50 shadow-inner mb-6">
            <img src="{{ $auxiliar->imagen }}" alt="{{ $auxiliar->nombre }}" class="w-full h-full object-cover">
        </div>
        
        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ $auxiliar->nombre }}</h3>
        
        <div class="mb-4">
            <span class="inline-block px-3 py-1 bg-brand-50 text-brand-600 dark:bg-brand-900/30 dark:text-brand-400 rounded-full text-xs font-semibold uppercase tracking-wider mb-2">
                Auxiliar - {{ $auxiliar->tipo }}
            </span>
            <p class="text-sm font-medium text-gray-700 dark:text-gray-300 line-clamp-2" title="{{ $auxiliar->materias }}">
                {{ $auxiliar->materias }}
            </p>
        </div>
        
        <p class="text-sm text-gray-500 dark:text-gray-400 mb-6 flex-grow">
            {{ Str::limit($auxiliar->descripcion, 100) }}
        </p>
        
        <a href="http://wa.me//+591{{ $auxiliar->telefono }}" target="_blank" class="mt-auto w-full inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-brand-600 hover:bg-brand-700 dark:hover:bg-brand-500 shadow-sm transition-colors duration-200">
            Contáctame
            <i class="fab fa-whatsapp ml-2 text-lg"></i>
        </a>
        
    </div>
@endforeach
