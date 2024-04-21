<?php

namespace Tests\Feature;

use App\Models\Curso;
use App\Models\Professor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use database\factories\ProfessorFactory;
use Illuminate\Support\Facades\DB;

class ProfessorTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function um_professor_pode_ser_criado()
    {
        // Inicia uma transação
        DB::beginTransaction();

        try {
            $curso = Curso::factory()->create();
            
            $response = $this->post('/professor/store', [
                'nome' => 'Flavia',
                'RP' => '55fcd',
                'tempo_casa' => 5,
                'curso_id' => $curso->id
            ]);

            $response->assertStatus(302);

            $this->assertCount(1, Professor::all());
            $this->assertEquals('Flavia', Professor::first()->nome);
            $this->assertEquals('55fcd', Professor::first()->RP);
            $this->assertEquals(5, Professor::first()->tempo_casa);
            $this->assertEquals($curso->id, Professor::first()->curso_id);
            
            // Finaliza a transação
            DB::commit();
        } catch (\Exception $e) {
            // Reverte a transação em caso de exceção
            DB::rollBack();
            throw $e;
        }
    }
}