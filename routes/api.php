<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackController;
use App\Http\Controllers\AuxiliarController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('auxiliares',[AuxiliarController::class,'getAuxiliares']);

Route::get('packs',[PackController::class,'getPacks']);
Route::get('packs/semestres',[PackController::class,'getPacksSemestres']);
Route::get('semestres/materias',[PackController::class,'getSemestresMaterias']);