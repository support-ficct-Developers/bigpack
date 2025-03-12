<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $table = "materias";
    protected $fillable = ['id_semestre', 'nombre', 'sigla'];

    public function semestre()
    {
        return $this->belongsTo(Semestre::class, 'id_semestre');
    }

    public function packs()
    {
        return $this->hasMany(Pack::class, 'id_materia');
    }
}
