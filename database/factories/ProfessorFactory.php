<?php

namespace Database\Factories;

use App\Models\Professor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfessorFactory extends Factory
{
    protected $model = Professor::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'RP' => $this->faker->unique()->regexify('[A-Z]{2}\d{3}'),
            'tempo_casa' => $this->faker->numberBetween(1, 30),
            'curso_id' => function () {
                $curso = \App\Models\Curso::inRandomOrder()->first();
                return $curso ? $curso->id : null;
            },
        ];
    }

}
