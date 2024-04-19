<?php

namespace Database\Factories;

use App\Models\Materia;
use Illuminate\Database\Eloquent\Factories\Factory;

class MateriaFactory extends Factory
{
    protected $model = Materia::class;

    public function definition()
    {
        $curso = \App\Models\Curso::inRandomOrder()->first();
        $professor = \App\Models\Professor::inRandomOrder()->first();

        if (!$professor) {
            $professor = \App\Models\Professor::factory()->create(['curso_id' => $curso->id]);
        }

        return [
            'codigo' => $this->faker->unique()->regexify('[A-Z]\d{4}'),
            'nome' => $this->faker->sentence(2),
            'curso_id' => $curso ? $curso->id : null,
            'professor_id' => $professor ? $professor->id : null,
        ];
    }
}
