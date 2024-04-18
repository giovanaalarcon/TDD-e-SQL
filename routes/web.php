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
use App\Http\Controllers\ProfessorController;

//Rota da Tela Inicial
Route::get('/', [AlunoController::class, 'index']);
Route::get('/aluno/{aluno}', [AlunoController::class, 'show']);

//inserir professor

Route::get('/professor/create', [AlunoController::class, 'createProfessor'])->name('create_professor');
Route::post('/professor/store', [AlunoController::class, 'storeProfessor'])->name('store_professor');



