<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $table = 'materias';
    protected $fillable = ['codigo', 'nome', 'curso_id'];

    //Relacionamento One (curso) to Many (materias)
    public function curso() {
        return $this->belongsTo(Materia::class, foreignKey: 'curso_id', ownerKey: 'id');
    }

}
