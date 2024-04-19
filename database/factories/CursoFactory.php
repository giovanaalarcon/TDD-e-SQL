<?php
namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    protected $model = Curso::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->sentence(2), 
            'codigo' => $this->faker->unique()->regexify('[A-Z]{2}\d{4}'),
        ];
    }
}
