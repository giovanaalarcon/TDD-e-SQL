<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $table = 'alunos';
    protected $fillable = ['id','nome', 'RA', 'idade'];

     //Relacionamento Many to Many
     public function professores(){
        return $this->belongsToMany(Professor::class, 'alunos_professores', 'id_aluno', 'id_professor');
    }
}
