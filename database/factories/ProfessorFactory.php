<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Professor;
use App\Models\Curso;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Professor>
 */
class ProfessorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Professor::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'RP' => $this->faker->unique()->numerify('RP###'),
            'tempo_casa' => $this->faker->numberBetween(1, 30),
            'curso_id' => Curso::factory(), // Gera ou usa um curso existente
        ];
    }
}
