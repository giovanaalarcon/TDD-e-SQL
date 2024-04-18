<?php

namespace App\Http\Controllers;

use App\Models\Curso; 
use App\Models\Aluno;
use App\Models\Materia; 
use App\Models\Professor;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function show(Aluno $aluno){
        $curso = $aluno->curso()->first();
        return view('', compact('curso', 'aluno'));
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