<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Materia;
use App\Models\Curso;
use App\Models\Professor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materia>
 */
class MateriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Materia::class;

    public function definition()
    {
        return [
            'codigo' => $this->faker->unique()->bothify('COD###'),
            'nome' => $this->faker->word,
            'curso_id' => Curso::factory(),
            'professor_id' => Professor::factory(),
        ];
    }
}
