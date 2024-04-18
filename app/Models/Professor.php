<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $table = 'professores';
    protected $fillable = ['nome', 'RP', 'tempo_casa', 'curso_id'];

    //Relacionamento One (curso) to Many (professores)
    public function curso(){
        return $this->hasMany(Professor::class, foreignKey: 'curso_id', localKey: 'id');
    }

}