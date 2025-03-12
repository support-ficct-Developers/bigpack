<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    use HasFactory;

    protected $table = "semestres";
    protected $fillable = ['nombre'];

    public function materias()
    {
        return $this->hasMany(Materia::class, 'id_semestre');
    }
}
