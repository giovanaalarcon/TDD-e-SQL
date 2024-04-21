<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Curso;

class CursoControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_atualiza_curso()
    {
        // Criar um curso para atualizar
        $curso = Curso::factory()->create([
            'nome' => 'Engeharia Macanica',
            'codigo' => 'CUR001'
        ]);

        // Dados para atualização
        $dadosAtualizados = [
            'nome' => 'Design',
            'codigo' => 'CUR002'
        ];

        // Atualizar o curso com uma solicitação HTTP
        $response = $this->put(route('curso.edit.do', $curso->id), $dadosAtualizados);

        // Verifique se a resposta redireciona ou não
        if ($response->isRedirection()) {
            $response->assertRedirect(); // Checar para onde está redirecionando
        } else {
            // Se não redirecionar, verifique se é um status 200 ou 204
            $response->assertStatus(200); // ou 204
        }

        // Verifique se as informações do curso foram atualizadas no banco de dados
        $this->assertDatabaseHas('cursos', [
            'id' => $curso->id,
            'nome' => 'Design',
            'codigo' => 'CUR002'
        ]);
    }
}
