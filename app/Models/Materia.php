<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $table = "materias";
    protected $fillable = ['nombre','sigla'];

    public function semetre(){
        return $this->belongsTo('App\Models\Semestre', 'id_semestre');
    }

    public function pack(){
        return $this->hasMany('App\Models\Pack');
    }

}
