<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

// incluir arquivo da tabela de aluno
require_once 'caminho_para_o_arquivo_tabela_aluno.php';

class AlunoTest extends TestCase
{
    /**
     * Testa a busca de um aluno pelo nome.
     *
     * @return void
     */
    public function test_busca_aluno()
    {
        // Crie uma instância da classe Aluno
        $aluno = new Aluno();

        // Defina o nome do aluno que deseja buscar (você pode obter isso do formulário)
        $nomeAluno = $_GET['procuraaluno']; // Supondo que o nome venha do formulário

        // Chame o método de busca do aluno por nome
        $alunoEncontrado = $aluno->buscarAlunoPorNome($nomeAluno);

        // Verifique se o aluno foi encontrado (ou qualquer verificação relevante ao seu caso)
        $this->assertNotNull($alunoEncontrado);
    }

    public function test_example()
    {
        // Este é apenas um exemplo de teste
        $this->assertTrue(true);
    }
}
