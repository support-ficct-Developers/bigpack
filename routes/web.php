<?php
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\SemestreController;
use App\Http\Controllers\PackController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('docentes',DocenteController::class);
Route::resource('materias',MateriaController::class);
Route::resource('packs',PackController::class);
Route::resource('semestres',SemestreController::class);
Route::get('/postSemestres',[SemestreController::class,'indexPost']);
route::get('/postMaterias/{semestres}',[MateriaController::class,'indexPost'])->name('postMaterias');
route::get('/postPacks/{idMateria}',[PackController::class,'indexPost'])->name('postPacks');
Route::resource('users',UserController::class);
