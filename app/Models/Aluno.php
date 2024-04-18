<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $table = 'alunos';
    protected $fillable = ['nome', 'RA', 'idade','curso_id'];

    //Relacionamento One (curso) to Many (alunos)
    public function curso() {
        return $this->belongsTo(Curso::class, foreignKey: 'curso_id', ownerKey: 'id');
    }

     //Relacionamento Many to Many
     public function professores(){
        return $this->belongsToMany(Professor::class, 'alunos_professores', 'id_aluno', 'id_professor');
    }

}
