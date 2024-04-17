<?php

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

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\ProfessorController;


Route::get('/', [CursoController::class, 'index']);
Route::get('/curso/{curso}', [CursoController::class, 'show']);

//Rota para editar informacoes de Curso
Route::get('curso/editar/{curso}', [CursoController::class, 'formEditCurso'])->name('curso.edit');
Route::put('curso/edit/{curso}', [CursoController::class, 'edit'])->name('curso.edit.do');

//Rota para deletar
Route::delete('/materia/delete/{id}', [MateriaController::class, 'deleteMateria']);

