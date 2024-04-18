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
        
        $alunos = Aluno::all();
        $professores = Professor::all();
        

        return view('welcome',['alunos' => $alunos, 'professores'=>$professores]);
    }

    /*
    |--------------------------------------------------------------------------
    | Funcao create
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para criar uma pagina de cadastro 
    |
    */



    /*
    |--------------------------------------------------------------------------
    | Funcao store
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para cadastrar um novo Student no banco de dados
    |
    */

    /*public function store(Request $request){

        Aluno::create([
            'id' => $request->id,
            'nome' => $request->nome,
            'RA' => $request->RA,
            'idade' => $request->idade,
        ]);

        return redirect()->route('admin');
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Funcao show
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para fazer um relacionamento Many to Many entre Courses
    | e Students 
    |
    */

    public function show(Aluno $aluno){

   return view('show', compact('aluno'));
}

    
    /*
    |--------------------------------------------------------------------------
    | Funcao deleteStudent
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para deletar um Student 
    |
    */

    /*public function deleteStudent($id){

        $professor = Professor::all();
        
        $aluno = Aluno::where('id', $id)->first();
        
        $aluno->delete();
        
        return redirect()->back();
    }
    */

    public function createProfessor()
    {
        return view('create');
    }
    
    public function storeProfessor(Request $request)
    {
        // Valide os dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            // Adicione outras regras de validação conforme necessário
        ]);
    
        // Crie um novo professor
        $professor = new Professor();
        $professor->nome = $request->nome;
        $professor->RP = $request->RP; // Substitua 'valor válido' pelo valor adequado
        $professor->tempo_casa = $request->tempo_casa;
        $professor->save();

    
        return redirect()->route('create_professor')->with('success', 'Professor criado com sucesso.');
    }
    

}
