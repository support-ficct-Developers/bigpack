<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;
    protected $table = "packs";
    protected $fillable = ['id_materia','id_docente','link'];

    public function materia(){
        return $this->belongsTo('App\Models\Materia', 'id_materia');
    }

    public function docente(){
        return $this->belongsTo('App\Models\Materia', 'id_docente');
    }
}
