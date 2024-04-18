<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $table = 'materias';
    protected $fillable = ['codigo', 'nome', 'curso_id', 'professor_id'];

    //Relacionamento One (professor) to Many (materias)
    public function professor() {
        return $this->belongsTo(Professor::class, foreignKey: 'professor_id', ownerKey: 'id');
    }

    //Relacionamento One (curso) to Many (materias)
    public function curso() {
        return $this->belongsTo(Materia::class, foreignKey: 'curso_id', ownerKey: 'id');
    }

}
