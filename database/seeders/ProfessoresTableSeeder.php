<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProfessoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professores')->insert([
            ['nome' => 'Xastre', 'RP' => 'LX123', 'tempo_casa' => 12, 'curso_id' => 1],
            ['nome' => 'Lucia', 'RP' => 'LG234', 'tempo_casa' => 20, 'curso_id' => 2],
            ['nome' => 'Takeo', 'RP' => 'TA134', 'tempo_casa' => 8, 'curso_id' => 3],
            ['nome' => 'Julio', 'RP' => 'JP456', 'tempo_casa' => 10, 'curso_id' => 4],
            ['nome' => 'Cristiane', 'RP' => 'CB897', 'tempo_casa' => 15, 'curso_id' => 5],
            ['nome' => 'Juliana', 'RP' => 'JB356', 'tempo_casa' => 30, 'curso_id' => 1],
            ['nome' => 'Luciano', 'RP' => 'LT573', 'tempo_casa' => 11, 'curso_id' => 3],
        ]);
    }
}
