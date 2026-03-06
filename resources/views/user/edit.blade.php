@extends('layouts.public')

@section('title', 'Perfil de Usuario')

@section('content')
    <main class="w-full flex-1">
        <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10" id="profile">
            
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Mi Perfil</h2>
                <span class="mt-2 text-gray-500 dark:text-gray-400 block font-medium">Actualiza tu información personal y contraseña</span>
            </div>

            @if (session('info'))
                <div class="mb-6 p-4 rounded-lg bg-green-50 dark:bg-green-900/30 border border-green-200 dark:border-green-800 text-green-700 dark:text-green-400 flex items-center">
                    <i class="fas fa-check-circle mr-3 text-lg"></i>
                    <strong>{{ session('info') }}</strong>
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
                <div class="p-6 sm:p-8">
                    <form method="post" action="{{ route('user.update') }}" novalidate class="space-y-6">
                        @csrf
                        @method('PATCH')

                        <!-- Nombre -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Nombre Completo</label>
                            <div class="relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus
                                    class="block w-full pl-10 pr-3 py-2.5 sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 text-gray-900 dark:text-white rounded-lg focus:ring-brand-500 focus:border-brand-500 transition-colors @error('name') border-red-300 dark:border-red-600 text-red-900 dark:text-red-400 placeholder-red-300 focus:ring-red-500 focus:border-red-500 @enderror">
                            </div>
                            @error('name')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Correo Electrónico</label>
                            <div class="relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email"
                                    class="block w-full pl-10 pr-3 py-2.5 sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 text-gray-900 dark:text-white rounded-lg focus:ring-brand-500 focus:border-brand-500 transition-colors @error('email') border-red-300 dark:border-red-600 text-red-900 dark:text-red-400 placeholder-red-300 focus:ring-red-500 focus:border-red-500 @enderror">
                            </div>
                            @error('email')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        <hr class="border-gray-200 dark:border-gray-700 my-6">

                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Nueva Contraseña <span class="text-gray-400 font-normal text-xs">(Dejar en blanco para no cambiar)</span></label>
                            <div class="relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input id="password" type="password" name="password" autocomplete="new-password"
                                    class="block w-full pl-10 pr-3 py-2.5 sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 text-gray-900 dark:text-white rounded-lg focus:ring-brand-500 focus:border-brand-500 transition-colors @error('password') border-red-300 dark:border-red-600 text-red-900 dark:text-red-400 placeholder-red-300 focus:ring-red-500 focus:border-red-500 @enderror">
                            </div>
                            @error('password')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Buttons -->
                        <div class="pt-4 flex items-center justify-end space-x-4">
                            <a href="{{ url('/') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 shadow-sm text-sm font-medium rounded-lg text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 dark:focus:ring-offset-gray-900 transition-colors">
                                Cancelar
                            </a>
                            <button type="submit" class="inline-flex items-center justify-center px-6 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-brand-600 hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 dark:focus:ring-offset-gray-900 shadow-sm transition-colors">
                                <i class="fas fa-save mr-2"></i>
                                Guardar Cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@stop

@section('css')
    <!-- Aquí puedes añadir css extra si lo necesitas, pero los DataTables han sido eliminados ya que no se usa tabla en perfil -->
@stop

@section('js')
    <!-- DataTables JS y jQuery eliminados porque la vista de Perfil no los utiliza -->
@stop
