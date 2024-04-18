<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MateriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
            ['codigo' => 'P0120', 'nome' => 'Calculo 1', 'curso_id' => 2],
            ['codigo' => 'P0121', 'nome' => 'Desenho_Grafico', 'curso_id' => 2],
            ['codigo' => 'P0122', 'nome' => 'Fisica', 'curso_id' => 4],
            ['codigo' => 'P0123', 'nome' => 'Mecanica dos Solidos', 'curso_id' => 4],
            ['codigo' => 'P0124', 'nome' => 'Python', 'curso_id' => 3],
            ['codigo' => 'P0125', 'nome' => 'Javascript', 'curso_id' => 3],
            ['codigo' => 'P0126', 'nome' => 'Economia', 'curso_id' => 1],
            ['codigo' => 'P0127', 'nome' => 'Empreendedorismo', 'curso_id' => 1],
            ['codigo' => 'P0128', 'nome' => 'Marketing', 'curso_id' => 1],
            ['codigo' => 'P0129', 'nome' => 'Aplicativos', 'curso_id' => 5],
        ]);
    }
}
