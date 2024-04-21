<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Materia;

class MateriaControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_deletar_materia()
    {
        // Criar uma matéria para deletar
        $materia = Materia::factory()->create();

        // Verifique se a matéria foi criada com sucesso
        $this->assertDatabaseHas('materias', ['id' => $materia->id]);

        // Execute a ação para deletar a matéria
        $response = $this->delete(route('delete_materia', $materia->id));

        // Verifique se a matéria foi deletada do banco de dados
        $this->assertDatabaseMissing('materias', ['id' => $materia->id]);

        // Verifique se a resposta redireciona ou não
        if ($response->isRedirection()) {
            $response->assertRedirect(); // Checar para onde está redirecionando
        } else {
            // Se não redirecionar, verifique se é um status 200 ou 204
            $response->assertStatus(200); // ou 204
        }
    }
}
