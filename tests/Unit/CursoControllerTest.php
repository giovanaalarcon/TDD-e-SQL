<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\CursoController;

class CursoControllerTest extends TestCase
{

    public function test_existe_alunos_no_curso()
    {
        // Execute a função show($id) no controlador
        $controller = new CursoController;
        $alunos = $controller->show(3);

        // Verifique se o aluno retornado não é nulo
        $this->assertNull($alunos, 'Nenhum aluno encontrado para este curso!');

        // Verifique se o aluno retornado possui os atributos esperados
        $this->assertEquals($aluno->id, $alunos->first()->id);
        $this->assertEquals($aluno->nome, $alunos->first()->nome);
    }

    public function test_update_course_data()
    {
        // Execute a função update() no controlador para atualizar os dados do curso
        $controller = new CursoController;
        $controller->update($curso->id, $novosDados);

        // Recupere o curso atualizado do banco de dados
        $cursoAtualizado = Curso::find($curso->id);

        // Verifique se os dados do curso foram atualizados corretamente
        $this->assertEquals($novosDados['nome'], $cursoAtualizado->nome);
        $this->assertEquals($novosDados['descricao'], $cursoAtualizado->descricao);
    }

}
