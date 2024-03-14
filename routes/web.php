<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Rutas Agrupadas*/

Route::controller(CursoController::class)->group(function(){
    Route::get('/cursos', 'index')->name('cursos.index');
    Route::get('/cursos/create', 'create')->name('cursos.create');
    Route::post('/cursos', 'store')->name('cursos.store');
    Route::get('/cursos/{id}', 'show')->name('cursos.show');
});

/* Se declaran las Rutas de forma tradiciuonal

Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/create', [CursoController::class, 'create']);
Route::get('/cursos/{curso}', [CursoController::class, 'show']);
*/