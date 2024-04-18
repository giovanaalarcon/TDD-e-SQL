<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';
    protected $fillable = ['nome', 'codigo'];

    //Relacionamento One (curso) to Many (materias)
    public function materia() {
        return $this->hasMany(Materia::class, foreignKey: 'curso_id', ownerKey: 'id');
    }

    //Relacionamento One (curso) to Many (alunos)
    public function alunos(){
        return $this->hasMany(Aluno::class, foreignKey: 'curso_id', localKey: 'id');
    }

    //Relacionamento One (curso) to Many (professores)
    public function professores(){
        return $this->hasMany(Professor::class, foreignKey: 'curso_id', localKey: 'id');
    }

}
