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

    public function show(Materia $materia){
        $curso = $materia->curso()->first();
        return view('', compact('curso', 'materia'));
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

        // Buscar a matéria pelo ID e verificar se ela existe
        $materia = Materia::find($id);

        if ($materia) {
            // Se a matéria existir, tente excluí-la
            $materia->delete();
            return redirect()->back()->with('del', 'Matéria deletada com sucesso!');
        } else {
            // Se a matéria não for encontrada, retorne com uma mensagem apropriada
            return redirect()->back()->with('del', 'Matéria não encontrada.');
        }
    }

}
