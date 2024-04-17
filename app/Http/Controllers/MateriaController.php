<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Professor;
use App\Models\Materia;

class MateriaController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Funcao show
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para fazer um relacionamento One to Many entre Professor
    | e Materias
    |
    */

    public function show($id){

        $professor = Professor::where('id', $id)->first();
        $materias = $professor?->materias()->get();

        return view('professor', compact('professor', 'materias'));
    }

    /*
    |--------------------------------------------------------------------------
    | Funcao deleteMateria
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para deletar um Materia
    |
    */
    public function deleteMateria($id){

        //$alunos = Aluno::all();
        
        $materia = Materia::where('id', $id)->first();
        /* 
        foreach($alunos as $aluno){
            $aluno->materia()->detach($id);
        }
        */
        $materia->delete();
        
        return redirect()->back()->with('del', 'Materia deletada com sucesso!');
    }
}
