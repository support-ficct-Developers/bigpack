<?php
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\SemestreController;
use App\Http\Controllers\PackController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuxiliarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('users',UserController::class);
    Route::get('user/profile/',[UserController::class,'show2'])->name('user.show');
    Route::patch('user/update/',[UserController::class,'update2'])->name('user.update');

    Route::get('packs-habilitar',[PackController::class,'indexHabilitar'])->name('packs.habilitar');
    Route::delete('packs-habilitar-delete/{pack}',[PackController::class,'destroy2'])->name('packs.destroy2');
    Route::get('habilitar-pack/{pack}',[PackController::class,'habilitar'])->name('pack.habilitar');
});

Route::resource('docentes', DocenteController::class);
Route::resource('materias',MateriaController::class);
Route::resource('packs',PackController::class);
Route::get('packs-user',[PackController::class,'show2'])->name('packs.show2');
Route::post('packs-user-store',[PackController::class,'store2'])->name('packs.store2');

Route::resource('semestres',SemestreController::class);
Route::get('/postSemestres',[SemestreController::class,'indexPost']);
route::get('/postMaterias/{semestres}',[MateriaController::class,'indexPost'])->name('postMaterias');
route::get('/postPacks/{idMateria}',[PackController::class,'indexPost'])->name('postPacks');

Route::get('/developers',[SemestreController::class,'developers']);
Route::resource('auxiliares',AuxiliarController::class);
route::get('/postAuxiliares',[AuxiliarController::class,'indexPost'])->name('postAuxiliares');

