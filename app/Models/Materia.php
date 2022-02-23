<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $table = "materias";
    protected $fillable = ['id_semestre','nombre','sigla'];

    public function semestre(){
        return $this->belongsTo('App\Models\Semestre','id_semestre');
    }

    public function packs(){
        return $this->hasMany('App\Models\Pack','id_materia');
    }

}
