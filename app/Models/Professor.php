<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $table = "professores";
    protected $fillable = ['id','nome', 'RP', 'tempo_casa'];

   // Relacionamento Many (alunos) to Many (professores)
    public function alunos(){
    return $this->belongsToMany(Aluno::class, 'alunos_professores', 'id_professor', 'id_aluno');
}

}