<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso; 
use App\Models\Aluno;
use App\Models\Materia; 
use App\Models\Professor;

class MateriaController extends Controller
{
    // Giovana
    public function show(Materia $materia){
        $curso = $materia->curso()->first();
        return view('', compact('curso', 'materia'));
    }
    // Final Giovana
}
