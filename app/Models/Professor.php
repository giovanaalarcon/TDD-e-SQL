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

}