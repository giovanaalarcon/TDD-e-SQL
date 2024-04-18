<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;
use App\Models\Professor;
use App\Models\Aluno_Professor;


class AlunoController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Funcao index
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para retornar os Students para a view
    |
    */

    public function index(){
        
        $professores = Professor::all();
        

        return view('welcome',['professores' => $professores]);
    }

    /*
    |--------------------------------------------------------------------------
    | Funcao create
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para criar uma pagina de cadastro 
    |
    */

    public function create(){
        return view('cadastro.matricula');
    }

    /*
    |--------------------------------------------------------------------------
    | Funcao store
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para cadastrar um novo Student no banco de dados
    |
    */

    public function store(Request $request){

        Aluno::create([
            'id' => $request->id,
            'nome' => $request->nome,
            'RP' => $request->RP,
            'tempo_casa' => $request->tempo_casa,
        ]);

        return redirect()->route('admin');
    }

    /*
    |--------------------------------------------------------------------------
    | Funcao show
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para fazer um relacionamento Many to Many entre Courses
    | e Students 
    |
    */

    public function show(Professor $professor){

        $A_P = Aluno_professor::where('id_professor', $professor->id)->get();

        return view('aluno', compact('aluno', 'professor'));
    }

    /*
    |--------------------------------------------------------------------------
    | Funcao deleteStudent
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para deletar um Student 
    |
    */

    public function deleteProfessor($id){

        $aluno = Aluno::all();
        
        $professor = Professor::where('id', $id)->first();
        
        $professor->delete();
        
        return redirect()->back();
    }

}
