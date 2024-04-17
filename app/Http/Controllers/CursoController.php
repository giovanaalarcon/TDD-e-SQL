<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Professor;
use App\Models\Materia;

class CursoController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Funcao index
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para retornar os Cursos para a view
    |
    */

    public function index(){
        
        $cursos = Curso::all();
        $alunos = Aluno::all();
        

        return view('welcome',['cursos' => $cursos,'alunos' => $alunos]);
    }


    /*
    |--------------------------------------------------------------------------
    | Funcao show
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para fazer um relacionamento One to Many entre Curso
    | e Alunos
    |
    */

    public function show($id){

        $curso = Curso::where('id', $id)->first();
        $alunos = $curso?->alunos()->get();

        return view('curso', compact('curso', 'alunos'));
    }

    /*
    |--------------------------------------------------------------------------
    | Funcao edit
    |--------------------------------------------------------------------------
    |
    | Funcoes utilizadas para criar uma view de edicao de curso e fazer a
    | edicao de informacoes de curso
    |
    */

    public function edit(Curso $curso, Request $request){

        $curso->nome = $request->nome;
        $curso->codigo = $request->codigo;

        $curso->save();

        return back()->with('msg', 'Informacoes do curso atualizados com sucesso!');;
    }

}
