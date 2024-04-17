<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;
use App\Models\Curso;

class AlunoController extends Controller
{

/*
    |--------------------------------------------------------------------------
    | Funcao show
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para fazer um relacionamento One to Many entre Curso 
    | e Alunos
    |
    */
    public function show(Aluno $alunos){
        
        $curso = $alunos->curso()->first();

        return view('welcome', compact('alunos', 'curso'));

    }
}
