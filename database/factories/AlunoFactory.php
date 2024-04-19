<?php
namespace Database\Factories;

use App\Models\Aluno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlunoFactory extends Factory
{
    protected $model = Aluno::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'RA' => $this->faker->unique()->numerify('########'),
            'idade' => $this->faker->numberBetween(18, 30),
            'curso_id' => function () {
                return \App\Models\Curso::inRandomOrder()->first()->id; 
            },
        ];
    }
}

