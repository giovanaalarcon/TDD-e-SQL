<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Materia;
use App\Models\Professor;
use database\factories\AlunoFactory;

class AlunoControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_pesquisa_aluno_por_nome()
    {
        $curso = Curso::factory()->create();
        $aluno = Aluno::factory()->create(['nome' => 'João', 'curso_id' => $curso->id]);
        $materia = Materia::factory()->create(['curso_id' => $curso->id]);
        $professor = Professor::factory()->create(['curso_id' => $curso->id]);
        
        $response = $this->post('/pesquisarAluno', ['nome' => 'João']);

        $response->assertStatus(200)
                ->assertSee($aluno->nome)
                ->assertSee((string)$aluno->RA) // Convertendo o RA para string
                ->assertSee($aluno->idade)
                ->assertSee($curso->nome)
                ->assertSee($materia->nome)
                ->assertSee($professor->nome);

    }
}
