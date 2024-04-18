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

        public function show(Materia $materia){
            $curso = $materia->curso()->first();
            return view('', compact('curso', 'materia'));
        }
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

        $materia = Materia::where('id', $id)->first();
    
        $materia->delete();
        
        return redirect()->back()->with('del', 'Materia deletada com sucesso!');
    }
}
