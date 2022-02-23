<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $table = "docentes";
    protected $fillable = ['nombre'];

    public function packs(){
        return $this->hasMany('App\Models\Pack','id_docente');
    }

}
