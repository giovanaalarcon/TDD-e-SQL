<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso; 
use App\Models\Aluno;
use App\Models\Materia; 
use App\Models\Professor;

class CursoController extends Controller
{
    public function show($id){
        // Giovana
        $curso = Curso::where('id', $id)->first();
        $aluno = $curso?->aluno()->get();
        $professor = $curso?->professor()->get();
        $materia = $curso?->materia()->get();
        return view('', compact('curso', 'aluno', 'professor', 'materia'));
        // Final Giovana
    }
}
