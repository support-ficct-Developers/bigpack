@extends('layouts.public')

@section('title', 'Mis Packs')

@section('content')

<main class="w-full flex-1">
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10" id="mis-packs">
        
        <div class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Mis Packs</h2>
                <span class="mt-2 text-gray-500 dark:text-gray-400 block font-medium">Gestiona y aporta material de estudio</span>
            </div>
        </div>

        @if (session('info'))
            <div class="mb-6 p-4 rounded-lg bg-green-50 dark:bg-green-900/30 border border-green-200 dark:border-green-800 text-green-700 dark:text-green-400 flex items-center">
                <i class="fas fa-check-circle mr-3 text-lg"></i>
                <strong>{{ session('info') }}</strong>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Columna Formulario: Registrar Pack -->
            <div class="lg:col-span-1">
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden sticky top-24">
                    <div class="p-6 border-b border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white flex items-center">
                            <i class="fas fa-plus-circle text-brand-500 mr-2"></i> Registrar Pack
                        </h3>
                    </div>
                    <div class="p-6">
                        <form method="post" action="{{ route('user.packs.store') }}" novalidate class="space-y-5">
                            @csrf
                            
                            <!-- Materia -->
                            <div>
                                <label for="id_materia" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Materia</label>
                                <select name="id_materia" id="id_materia" class="mi-selector block w-full pl-3 pr-10 py-2.5 text-base border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-brand-500 focus:border-brand-500 sm:text-sm rounded-lg transition-colors @error('id_materia') border-red-300 dark:border-red-600 @enderror">
                                    <option value=""></option>
                                    @foreach ($materias as $materia)
                                        <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                                    @endforeach
                                </select>
                                @error('id_materia')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">Debe elegir una opción.</p>
                                @enderror
                            </div>

                            <!-- Docente -->
                            <div>
                                <label for="id_docente" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Docente</label>
                                <select name="id_docente" id="id_docente" class="mi-selector block w-full pl-3 pr-10 py-2.5 text-base border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-brand-500 focus:border-brand-500 sm:text-sm rounded-lg transition-colors @error('id_docente') border-red-300 dark:border-red-600 @enderror">
                                    <option value=""></option>
                                    @foreach ($docentes as $docente)
                                        <option value="{{ $docente->id }}">{{ $docente->nombre }}</option>
                                    @endforeach
                                </select>
                                @error('id_docente')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">Debe elegir una opción.</p>
                                @enderror
                            </div>

                            <!-- Link -->
                            <div>
                                <label for="link" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Link</label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-link text-gray-400"></i>
                                    </div>
                                    <input type="url" name="link" id="link" placeholder="drive, mega, youtube..." 
                                        class="block w-full pl-10 pr-3 py-2.5 sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 text-gray-900 dark:text-white rounded-lg focus:ring-brand-500 focus:border-brand-500 transition-colors @error('link') border-red-300 dark:border-red-600 @enderror">
                                </div>
                                @error('link')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">Debe llenar este campo.</p>
                                @enderror
                            </div>
                            
                            <!-- Descripción -->
                            <div>
                                <label for="descripcion" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Descripción</label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 pt-3 flex items-start pointer-events-none">
                                        <i class="fas fa-align-left text-gray-400"></i>
                                    </div>
                                    <textarea name="descripcion" id="descripcion" rows="3" placeholder="Ej. modelos de examenes, practicos, etc..." 
                                        class="block w-full pl-10 pr-3 py-2.5 sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 text-gray-900 dark:text-white rounded-lg focus:ring-brand-500 focus:border-brand-500 transition-colors"></textarea>
                                </div>
                            </div>

                            <button type="submit" class="w-full inline-flex justify-center items-center px-4 py-2.5 border border-transparent text-sm font-medium rounded-lg text-white bg-brand-600 hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 dark:focus:ring-offset-gray-900 shadow-sm transition-colors mt-6">
                                <i class="fas fa-save mr-2"></i> Registrar
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Columna Tabla DataTables -->
            <div class="lg:col-span-2">
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
                    <div class="p-6 border-b border-gray-200 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white flex items-center">
                            <i class="fas fa-list text-brand-500 mr-2"></i> Listado de Mis Packs
                        </h3>
                    </div>
                    
                    <div class="p-6 overflow-x-auto text-gray-900 dark:text-gray-100">
                        <table class="w-full text-sm text-left whitespace-nowrap" id="packs" style="width:100%">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700/50 dark:text-gray-400 border-b border-gray-200 dark:border-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 font-semibold">Materia</th>
                                    <th scope="col" class="px-6 py-3 font-semibold">Docente</th>
                                    <th scope="col" class="px-6 py-3 font-semibold">Link</th>
                                    <th scope="col" class="px-6 py-3 font-semibold">Descripción</th>
                                    <th scope="col" class="px-6 py-3 font-semibold">Estado</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($packs as $pack)
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $pack->materia->nombre }}</td>
                                        <td class="px-6 py-4">{{ $pack->docente->nombre }}</td>
                                        <td class="px-6 py-4">
                                            <a href="{{ $pack->link }}" target="_blank" class="text-brand-600 dark:text-brand-400 hover:underline inline-flex items-center">
                                                Enlace <i class="fas fa-external-link-alt ml-1 text-xs"></i>
                                            </a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-normal min-w-[200px]">{{ Str::limit($pack->descripcion, 50) }}</td>
                                        <td class="px-6 py-4">
                                            @if ($pack->estado)
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400 border border-green-200 dark:border-green-800">
                                                    Habilitado
                                                </span>
                                            @else
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-500 border border-yellow-200 dark:border-yellow-800">
                                                    Pendiente
                                                </span>
                                            @endif
                                        </td> 
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>
@stop

@section('css')
    <!-- Select2 (Sigue funcionando bien encima de Tailwind con un par de ajustes o dark mode class overrides si es necesario) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    
    <!-- DataTables TailwindCSS Integration -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.tailwindcss.css">

    <style>
        /* Pequeño parche para DataTables Tailwind Mode oscuro y paginador */
        .dark div.dt-container .dt-search input, 
        .dark div.dt-container .dt-length select {
            background-color: #374151; /* gray-700 */
            border-color: #4b5563; /* gray-600 */
            color: #f3f4f6; /* gray-100 */
            border-radius: 0.5rem;
        }
        .dark div.dt-container .dt-search input:focus, 
        .dark div.dt-container .dt-length select:focus {
            --tw-ring-color: #ef4444; /* brand-500 */
            border-color: #ef4444;
        }
        
        /* Ajustar Select2 al estilo Tailwind */
        .select2-container .select2-selection--single {
            height: 42px !important;
            border-color: #d1d5db !important; /* gray-300 */
            border-radius: 0.5rem !important;
            display: flex;
            align-items: center;
        }
        .dark .select2-container .select2-selection--single {
            background-color: #374151 !important; /* gray-700 */
            border-color: #4b5563 !important; /* gray-600 */
        }
        .dark .select2-container .select2-selection--single .select2-selection__rendered {
            color: #f3f4f6 !important; /* white */
        }
        .dark .select2-container .select2-selection--single .select2-selection__arrow b {
            border-color: #9ca3af transparent transparent transparent !important;
        }
        .dark .select2-dropdown {
            background-color: #374151 !important;
            border-color: #4b5563 !important;
            color: #f3f4f6 !important;
        }
        .dark .select2-container--default .select2-results__option[aria-selected=true] {
            background-color: #4b5563 !important;
        }
        .dark .select2-container--default .select2-search--dropdown .select2-search__field {
            background-color: #1f2937 !important;
            border-color: #4b5563 !important;
            color: white !important;
        }
    </style>
@stop

@section('js')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <!-- DataTables Core & TailwindCSS Integration -->
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.tailwindcss.js"></script>
    
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            // Inicializar DataTables
            $('#packs').DataTable({
                responsive: true,
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json" // Traducción al español
                }
            });

            // Inicializar Select2
            $('.mi-selector').select2({
                placeholder: "Seleccione una opción",
                allowClear: true,
                width: '100%'
            });
        });
    </script>
@stop
