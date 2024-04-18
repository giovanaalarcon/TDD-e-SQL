<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            ['nome' => 'Administração', 'codigo' => 'AD5010'],
            ['nome' => 'Engenharia Civil', 'codigo' => 'EC0120'],
            ['nome' => 'Engenharia de Computação', 'codigo' => 'ET0230'],
            ['nome' => 'Engenharia Mecânica', 'codigo' => 'EM2012'],
            ['nome' => 'Sistemas de Informação', 'codigo' => 'SI1205'],
        ]);
    }
}

