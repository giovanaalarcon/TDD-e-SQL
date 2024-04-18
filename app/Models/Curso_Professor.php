<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso_Professor extends Model
{
    use HasFactory;

    protected $table = 'alunos_professores';
    protected $fillable = ['id_professores', 'id_cursos'];
}