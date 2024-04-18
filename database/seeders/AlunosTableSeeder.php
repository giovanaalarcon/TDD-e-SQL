<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert([
            ['nome' => 'Daniela Hayashi', 'RA' => '22005265', 'idade' => 22, 'curso_id' => 3],
            ['nome' => 'Carlos Teixeira', 'RA' => '22004932', 'idade' => 24, 'curso_id' => 1],
            ['nome' => 'Beatriz Newman', 'RA' => '22001652', 'idade' => 19, 'curso_id' => 3],
            ['nome' => 'Matheus Silveira', 'RA' => '22003456', 'idade' => 22, 'curso_id' => 2],
            ['nome' => 'Flavia Medeiros', 'RA' => '22009596', 'idade' => 20, 'curso_id' => 3],
            ['nome' => 'Paola Pereira', 'RA' => '22007712', 'idade' => 20, 'curso_id' => 4],
            ['nome' => 'Giovana Alarcon', 'RA' => '22003652', 'idade' => 19, 'curso_id' => 3],
            ['nome' => 'Luis Miguel', 'RA' => '22008967', 'idade' => 25, 'curso_id' => 5],
            ['nome' => 'Luana Baptista', 'RA' => '22006728', 'idade' => 20, 'curso_id' => 3],
            ['nome' => 'Marcos Silva', 'RA' => '22003768', 'idade' => 22, 'curso_id' => 2],
        ]);
    }
}
