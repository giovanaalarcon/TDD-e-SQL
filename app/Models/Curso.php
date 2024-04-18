<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';
    protected $fillable = ['nome', 'codigo'];

    //Relacionamento One (curso) to Many (professores)
    public function professores(){
        return $this->hasMany(Professor::class, foreignKey: 'curso_id', localKey: 'id');
    }

}
