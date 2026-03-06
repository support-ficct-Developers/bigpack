<?php
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\HomeController;
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
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [HomeController::class, 'adminHome'])->name('admin.home');
        Route::resource('users', UserController::class);
        Route::resource('docentes', DocenteController::class);
        Route::resource('materias', MateriaController::class);
        Route::resource('packs', PackController::class);
        Route::resource('auxiliares', AuxiliarController::class);
        Route::resource('semestres', SemestreController::class);
        Route::get('packs-habilitar', [PackController::class, 'indexHabilitar'])->name('packs.habilitar');
        Route::delete('packs-habilitar-delete/{pack}', [PackController::class, 'destroyPack'])->name('packs.destroy2');
        Route::get('habilitar-pack/{pack}', [PackController::class, 'habilitar'])->name('pack.habilitar');
    });

    Route::get('user/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::patch('user/update', [UserController::class, 'updateProfile'])->name('user.update');
    Route::get('packs-user', [PackController::class, 'userPacks'])->name('user.packs');
    Route::post('packs-user-store', [PackController::class, 'userPackStore'])->name('user.packs.store');
});

Route::get('/auxiliares', [AuxiliarController::class, 'indexPost'])->name('auxiliares');
Route::get('/developers', [SemestreController::class, 'developers'])->name('developers');

route::get('/semestre/{semestreId}/materias', [MateriaController::class, 'semestreMaterias'])->name('semestre.materia');
route::get('/materia/{materiaId}/packs', [PackController::class, 'materiaPacks'])->name('materia.packs');