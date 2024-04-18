<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Professor;
use App\Models\Materia;

class AlunoController extends Controller
{
    public function show(Aluno $aluno){
        $curso = Curso::where('id', $id)->first();
        $aluno = $curso?->aluno()->get();
        $professor = $curso?->professor()->get();
        $materia = $curso?->materia()->get();
        return view('', compact('curso', 'aluno', 'professor', 'materia'));
    }

    public function pesquisaAluno_form()
    {
        return view('pesquisarAluno');
    }

    public function pesquisaAluno(Request $request)
    {
        $nomeAluno = $request->input('nome');
        $aluno = Aluno::where('nome', $nomeAluno)->first();

        if (!$aluno) {
            return view('pesquisarAluno', ['mensagem' => 'Aluno não encontrado']);
        }

        $curso = Curso::find($aluno->curso_id);
        $materias = Materia::where('curso_id', $aluno->curso_id)->get();
        $professores = Professor::where('curso_id', $aluno->curso_id)->get();

        return view('pesquisarAluno', compact('aluno', 'curso', 'materias', 'professores'));
    }


}
