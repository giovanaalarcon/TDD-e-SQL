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

use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfessorController;

//Rota da Tela Inicial
Route::get('/', [CursoController::class, 'index']);
Route::get('/curso/{curso}', [CursoController::class, 'show']);