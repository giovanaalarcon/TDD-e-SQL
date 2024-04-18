<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Professor;
use App\Models\Materia;

class ProfessorController extends Controller
{
    public function show(Professor $professor){
        $curso = $professor->curso()->first();
        return view('', compact('curso', 'professor'));
    }
}
