@extends('layouts.public')

@section('title', 'Materias - Enlaces')

@section('content')

    <main class="w-full flex-1">
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16" id="packs">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white uppercase tracking-wider">{{ $materia }}</h2>
                <span class="mt-4 text-gray-500 dark:text-gray-400 block font-medium">Enlaces de Apoyo</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @include('packPost.dataPack')
            </div>
        </section>
    </main>

@stop
