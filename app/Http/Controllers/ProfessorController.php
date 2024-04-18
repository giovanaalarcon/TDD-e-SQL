<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso; 
use App\Models\Aluno;
use App\Models\Materia; 
use App\Models\Professor;

class ProfessorController extends Controller
{
    public function show(Professor $professor){
        $curso = $professor->curso()->first();
        return view('', compact('curso', 'professor'));
    }
}
