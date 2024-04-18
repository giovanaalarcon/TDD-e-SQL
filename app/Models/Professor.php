<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $table = 'professores';
    protected $fillable = ['nome', 'RP', 'tempo_casa', 'curso_id'];

    //Relacionamento One (professor) to Many (materias)
    public function materias(){
        return $this->hasMany(Materia::class, foreignKey: 'professor_id', localKey: 'id');
    }

    //Relacionamento One (curso) to Many (professores)
    public function curso(){
        return $this->hasMany(Professor::class, foreignKey: 'curso_id', localKey: 'id');
    }

   // Relacionamento Many (alunos) to Many (professores)
   public function alunos(){
    return $this->belongsToMany(Aluno::class, 'alunos_professores', 'id_professor', 'id_aluno');
    }

}
