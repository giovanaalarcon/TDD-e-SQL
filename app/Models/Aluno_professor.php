<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno_professor extends Model
{
    use HasFactory;

    protected $table = 'alunos_professores';
    protected $fillable = ['id_aluno', 'id_professor'];
}
